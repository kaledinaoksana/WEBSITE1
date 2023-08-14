<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(__DIR__.'/../../blocks/head_art.php') ?>
</head> 

<body>

    <h2 class="resume-name text-uppercase" style="color: #19202e;">KPMG Virtual Internship</h2>
    <!-- Skills-->
    <ul class="list-inline" padding="0% 0% 0% 0%">
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Python</span></li>
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Quality Assesment</span></li>
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Analitical Dashboard creation</span></li>
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Analytics</span></li>   
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Customer Segmentation</span></li> 
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Driven Presentations</span></li>
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Dashboards</span></li>
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Data Visualizations</span></li>   
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Presentations</span></li> 
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="color: black">Excel</span></li>                        
    </ul>

    <h3>Description + <a href="https://github.com/kaledinaoksana/kpmg" > <i class="fab fa-github" style="color: black;"></i> github</a></h3>

    <!-- sum -->
    <div class="resume-summary-desc">
        <p> Sprocket Central Pty Ltd has given us a new list of <b>1000 potential customers</b>
            with their demographics and attributes. 
        However, these customers do not have prior transaction history with the organisation.
        </p>
        <p>The marketing team at Sprocket Central Pty Ltd is sure that, if correctly analysed,
            the data would reveal useful customer insights which could help optimise resource 
            allocation for targeted marketing. Hence, improve performance by focusing on high 
            value customers.
        </p>
        <p>For context, Sprocket Central Pty Ltd is a long-standing KPMG client whom specialises 
            in high-quality bikes and accessible cycling accessories to riders. Their marketing 
            team is looking to boost business by analysing their existing customer dataset to 
            determine customer trends and behaviour.
        </p>
        <p>Using the existing 3 datasets (<code>CUSTOMER DEMOGRAPHIC</code>, 
            <code>CUSTOMER ADDRESS</code> and <code>TRANSACTIONS</code>) as a labelled dataset, 
            please recommend which of these 1000 new customers should be targeted to drive the most value for the 
            organisation.
        </p>
        <p>In building this recommendation, we need to start with a PowerPoint presentation which
            outlines the approach which we will be taking. The client has agreed on a 3 week scope
            with the following 3 phases as follows - Data Exploration; Model Development and 
            Interpretation.
        </p>
        <p>
         The GitHub repository can be found <a href="https://github.com/kaledinaoksana/kpmg">here</a>.</p>
    </div>

    <!-- framework -->
    <div>
        <h3>
            Data Quality Framework Table
        </h3>

        <ol >
            <li><b> Accuracy: </b>Correct Values</li>
            <li><b> Completeness: </b>Data Fields with Values</li>
            <li><b> Consistency: </b>Values Free from Contradiction</li>
            <li><b> Currency: </b>Values up to Date</li>
            <li><b> Relevancy: </b>Data Items with Value Meta-data</li>
            <li><b> Validity: </b>Data Containing Allowable values</li>
            <li><b> Uniqueness: </b>Records that are Duplicated</li>
        </ol>
    </div>

    <!-- Data Quality Assessment -->
    <div>
        <h3>I. Data Quality Assessment</h3>

        <p > Notable data quality issues that were encountered and the methods used to mitigate the identified data
            inconsistencies are as follows. Furthermore, recommendations have been provided to avoid the reoccurrence of data quality issues and improve the accuracy of the underlying data used to drive business
            decisions. 
        </p >
        <p><b>Additional "customer_id" in the <code>TRANSACTIONS</code> and <code>CUSTOMER ADDRESS</code></b></p>
        <p><i>
            Mitigation: Please ensure that all tables are from the same period. Only customers in the Customer Demographic
            list will be used as a training set for our model.
        </i></p>
        <ol>
            <li>demographic[”id”] = [1:4000]</li>
            <li>address[”id”] = [1:4000] + [4001, 4002, 4003] - [3, 10, 22, 23]</li>
            <li>transactions [”id”]: [1:3500] - [852, 869, 1373, 2074, 2660, 3229, 3236]</li>
        </ol>
        <p> This indicates that the data received may not be in sync with each other which may skew the analysis
                results if there are missing data records.
        </p>
    
        <p ><b>Various columns have empty values in certain records</b></p >

        <p><i>
            Mitigation: If only a small number of rows are empty, filter out the record entirely from the training set for
            prediction. Else, if it is a core field, impute based on distribution in the training dataset. 
        </i></p>

        <!-- TABLE: null in Customer demographic -->
        <h5><b><code>Customer demographic</code> - 4 000 rows</b></h5>

        <div class="table-wrapper">
            <table>
                <tr>
                    <th><b>COLUMN</b></th>
                    <th>customer_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>gender</th>
                    <th>past_3_years_bike_related_purchases</th>
                    <th>DOB</th>
                    <th>job_title</th>
                    <th>job_industry_category</th>
                    <th>wealth_segment</th>
                    <th>deceased_indicator</th>
                    <th>default</th>
                    <th>owns_car</th>
                    <th>tenure</th>
                </tr>
                <tr>
                    <th><b>NULLS</b></th>
                    <td>0</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">125</td>
                    <td>0</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">87</td>
                    <td style=" font-weight: bold;">506</td>
                    <td style=" font-weight: bold;">656</td>
                    <td>0</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">302</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">87</td>
                </tr>
            </table> 
        </div>

        <!-- TABLE: null in Customer address -->
        <h5><b><code>Customer address</code> - 3 999 rows</b></h5>
        
        <div class="table-wrapper">
            <table>
                <tr>
                <th><b>COLUMN</b></th>
                    <th>customer_id</th>
                    <th>address</th>
                    <th>postcode</th>
                    <th>state</th>
                    <th>country</th>
                    <th>property_valuation</th>
                </tr>
                <tr>
                    <th><b>NULLS</b></th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>      
        </div>
        
        <!-- TABLE: null in Transactions -->
        <h5><b><code>Transactions</code> - 20 000 rows</b></h5>

        <div class="table-wrapper">
            <table>
                <tr>
                    <th><b>COLUMN</b></th>
                    <th>transaction_id</th>
                    <th>product_id</th>
                    <th>customer_id</th>
                    <th>transaction_date</th>
                    <th>online_order</th>
                    <th>order_status</th>
                    <th>brand</th>
                    <th>product_line</th>
                    <th>product_class</th>
                    <th>product_size</th>
                    <th>list_price</th>
                    <th>standard_cost</th>
                    <th>product_first_sold_date</th>
                </tr>
                <tr>
                    <th><b>NULLS</b></th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">360</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">197</td>
                    <td style="font-weight: bold;">197</td>
                    <td style=" font-weight: bold;">197</td>
                    <td style="font-weight: bold;">197</td>
                    <td>0</td>
                    <td style=" font-weight: bold;">197</td>
                    <td style=" font-weight: bold;">197</td>
                </tr>
            </table>
        </div>

        <p>Percent of rows with na before: <b>2.77%</b></p>
        <p>Replacing values in the column 'online_order'. This field would be automatically 
            filled with one when employee use paying online.</p>
        <p><code style="color: #1E2738">df.loc[df['online_order'].isnull(), 'online_order'] = 0.0</code></p>
        <p> For key datasets, such as transactions, less than 1% (0.985%) of transactions have 
            missing fields (totalling less than 0.1% (1.7e-14%) of revenue) . These records have been 
            removed from the training dataset.</p>
            
        <p>Drop rows where column 'brand' ('product_line','product_class') is NULL</p>
        <p><code style="color: #1E2738">df = df.loc[(df['brand'].notnull()) & (df['product_line'].notnull())]</code></p>
        <p>Percent of rows with na: <b>0%</b></p>

        <p><b>Inconsistent data type for the same attribute</b></p>
        <p><i>
            Mitigation: Convert selected records in characters to numeric. Remove non-numeric characters from string.
        </i></p>
        <p><i>Recommendation: Ensure that fact tables in the given database have constraints on data types
        </i></p>

        <div class="textcols">
            <div class="textcols-item">
                <h5><b><code>Customer demographic</code></b></h5>
                <ol>
                    <li>"customer_id" to int</li>
                    <li>"past 3 years bike related purchases" to int</li>
                    <li>"DOB" to date</li>
                    <li>"tenure" to int</li>
                <ol>
            </div>

            <div class="textcols-item">
                <h5><b><code>Customer address</code></b></h5>
                <ol>
                    <li>"customer_id" to int</li>
                    <li>"property_valuation" to int</li>
                </ol>
            </div>

            <div class="textcols-item">
                <h5><b><code>Transactions</code></b></h5>
                <ol>
                    <li>"transaction_id" to int</li>
                    <li>"product_id" to int</li>
                    <li>"customer_id" to int</li>
                    <li>"transaction_date" to date</li>
                    <li>"online_order" to bool</li>
                    <li>"list_price" to float</li>
                    <li>"standard_cost" to float</li>
                    <li>"product_first_sold_date" to date</li>
                </ol>
            </div>

        </div>
        
        <p> 
        Having different data types for a given field make it difficult to interpret results at the later stage.
        Therefore, appropriate data transformations are made to ensure consistent data types for a given field.
        </p>

        <p><b>Inconsistent values for the same attribute</b></p>
        <p><i>
            Mitigation: Use regular expression to replaced extended values into abbreviations to ensure consistency across addresses. 
        </i></p><p><i>Recommendation: Enforce a drop-down list for the user entering the data rather than a free text field
        </i></p>
        
        <div class="textcols">

            <div class="textcols-item">
                <h5><b><code>Customer demographic</code></b></h5>
                <p><b>COLUMN "gender"</b></p>
                <ol>
                    <li>'Female' like 'Female', 'Femal','F'</li>
                    <li>'Male' like 'Male', 'M'</li>
                <ol>
            </div>

            <div class="textcols-item">
                <h5><b><code>Customer address</code></b></h5>
                <p><b>COLUMN "state"</b></p>
                <ol>
                    <li>'VIC' like 'VIC', 'Victoria'</li>
                    <li>'NSW' like 'NSW', 'New South Wales'</li>
                <ol>
            </div>

            <div class="textcols-item">
                <h5><b><code>Transactions</code></b></h5>
                <p>-</p>
            </div>

        </div>
        
        <p> 
            In order to construct meaningful variables for the model, the data has been cleaned to avoid multiple representations 
            of the same value. Additionally, gender records where 'U' have been replaced based on the distribution from the
            training dataset. 
        </p> 
   
    </div>

</body>
