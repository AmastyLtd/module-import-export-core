# Import Export Core by Amasty
<h3><b>Note:</b>  This free solution version is offered to let you evaluate our code quality. However, it does not include ready-made entities such as products, orders, and customers, which are necessary for using the import/export functionality. To perform any data migration, you will need to either create the mentioned entities yourself if you have the relevant expertise or purchase the full solution version on our website.</h3>
<p>Explore a free version of the import and export solution for Magento 2. Install together with the <a href="https://github.com/AmastyLtd/module-export-core" target="_blank">Export Core</a> and <a href="https://github.com/AmastyLtd/module-import-core" target="_blank">Import Core</a> to see the interface and full scope of data transfer features. This package has the same code and architecture as the original paid <a href="https://amasty.com/import-and-export-for-magento-2.html" target="_blank">Import and Export for Magento 2</a> extension but includes core functionality only suitable for manual data transfer. See the full scope of automatization features and entities available in the paid version <a href="https://export-extensions-m2.magento-demo.amasty.com/admin/amorderimport/profile/index/" target="_blank">in this demo</a> or <a href="https://calendly.com/yuliya-simakovich/book-a-demo" target="_blank">book a live demo</a> with the Amasty team to get a consultation in real-time.</p>

![import-and-export-premium-key-features](https://github.com/AmastyLtd/module-import-export-core/assets/104132415/8a1bcdb6-6aee-4e4b-bb8a-3f09f150bbbf)


<p>The paid version is available in Lite, Pro and Premium packages. <a href="https://amasty.com/import-and-export-for-magento-2.html#choose_option" target="_blank">Visit our webstore</a> to choose the pricing plan. A free package is the Lite version of the full <a href="https://amasty.com/import-and-export-for-magento-2.html" target="_blank">Import and Export for Magento 2</a> extension, but without ready-made entities for migration.</p>
<h2>What is the Core package for? </h2>
<p>Import & Export Core is a universal tool for data migration to or from Magento 2. The solution has a unique architecture and code structure without any intersections with the native import/export functionality developed by Magento. Even though a <b>free package does not include any ready-made entities for migration</b>, you can create compatibility with any entity you need. Import and Export Core is highly flexible and adaptive to any data presented in Magento and 3rd-party resources so that you could build integrations with the most complicated systems. </p>
<h2>Free version features</h2>
<p>With the help of this package you can:</p>
<ul>
<li><b>Perform manual one-time import or export of any entity:</b> the built-in interface lets you migrate the data you need, but does not include automatization options. It means that each data transfer is supposed to be configured separately. </li>
<li><b>Choose import behavior:</b> it is possible to add, update, delete data or add/update simultaneously. </li>
<li><b>Use 2 file formats:</b> a free package includes CSV and XML formats support.</li>
<li><b>Use 2 sources for data output and storage:</b> upload or download files and use local directories.</li>
<li><b>Configure the file for export:</b> add header row, customize entity keys and set suitable field names in export files. </li>
<li><b>Match file settings with Magento during import:</b> add field names provided in a file to the configuration to import data correctly. </li>
<li><b>Automatically modify the values:</b> use text, numeric, date or custom modifiers to change the values before importing or exporting (for example, round prices or capitalize product names). </li>
<li><b>Apply filters:</b> import or export only relevant data by setting suitable for filtering parameters. </li>
<li><b>Configure performance settings:</b> adjust the number of parallel processes according to your server capabilities. </li>
</ul>
<h2>Installation</h2>
<p>To install the package, run the following commands:</p>
<code>composer require amasty/module-import-export-core</code><br>
<code>php bin/magento setup:upgrade</code><br>
<code>php bin/magento setup:di:compile </code><br>
<code>php bin/magento setup:static-content:deploy (your locale)</code><br>
<br>
<p>See more details in the <a href="https://amasty.com/docs/doku.php?id=magento_2:composer_user_guide" target="_blank">Composer User Guide</a>. </p>
<h2>Import/Export Configuration & Flow</h2>
<p><b>To run data migration, you need to create the required entity or entities (e.g. products, orders, customers) first</b>. Let’s see how it works in the free version of the Magento 2 Order Import and Export module.</p>
<h3>Export Configuration </h3>
<p>Open the <b>Export</b> tab. Here you can choose the entity to export. As an example, we will export order items.</p>

![export-entity-git](https://user-images.githubusercontent.com/104132415/164422769-4fa91839-3358-4341-ac5e-459955ed8cf7.png)

<p>When the required entity is chosen, you can start Magento 2 export configuration. </p>
<h4>Step 1. Configure the file type</h4>
<p>It is possible to export files from Magento in an XML or CSV format. </p>

![format-git](https://user-images.githubusercontent.com/104132415/164429610-8affadff-05b2-4acc-83e5-469012f4818d.png)


<p>If you choose a CSV file, you can also add:</p>
<ul>
<li>a header row;</li>
<li>merge rows into one; </li>
<li>duplicate parent entity data;</li>
<li>set delimiters for fields and entity keys;</li>
<li>define enclosure characters. </li>
</ul>
<p>In other words, make your file structure suitable for the platform you are migrating data to. </p>
<h4>Step 2. Set the file name</h4>
<p>Provide the title of the file. Keep in mind that you can set a regular expression to fill in the date automatically.</p>

![file-name](https://user-images.githubusercontent.com/104132415/164425407-7ca59381-0b27-4d93-9bd3-f4e8910b8fb0.png)

<h4>Step 3. Define the destination</h4> 
<p>When the configuration is finished, you’ll be able to download a ready file. Meanwhile, you can output the file to the local server.</p> 

![storage](https://user-images.githubusercontent.com/104132415/164425732-ee116c77-8d13-46b7-9c35-4c5a182bdcf8.png)

<h4>Step 4. Fields configuration</h4> 
<p>In this part, you need to choose what data should be put in the file and how it should be displayed and named. File filling has a tree-structure logic, meaning that at first, you need to choose the key entities to enable, and then select the subentities required for the file. </p>
<p>Check the detailed instructions on each step <a href="https://amasty.com/docs/doku.php?id=magento_2:import_and_export#fields_configuration" target="_blank">in this guide</a>. </p>

![fields-configuration](https://user-images.githubusercontent.com/104132415/164426448-6b33bd09-3d2e-4154-b048-eeb6e586d39f.png)

<p>Start with the naming configuration. Customize entity keys that should be displayed in the columns. </p>
<ul>
  <li><b>Custom entity key</b> — set the key that should be placed before the title of the main entity columns. </li>
  <li><b>Output entity key</b> — provide custom keys to replace the default ones in the subentities-related columns. </li>
</ul>

![custom-keys](https://user-images.githubusercontent.com/104132415/164426821-bc2890da-673c-454d-a577-0d05dec7134f.png)

<p>As we want to export order items, add the fields you need in the pop-up window.</p>

![add-fields](https://user-images.githubusercontent.com/104132415/164427171-6abe2349-0e7c-4827-bbfb-d9a0fe54f2c8.png)

<p>You can remove the fields and reorder them by using drag-and-drop. Be aware that the file reproduces the order set during the configuration. </p> 

![drag-and-drop](https://user-images.githubusercontent.com/104132415/164427571-8d47acd2-85ae-409d-9922-75f680e956f7.png)

<p>Customize column titles for each field in order to match the requirement of the platform you are integrating with. </p>

![naming](https://user-images.githubusercontent.com/104132415/164427854-a008770b-7913-4a6f-9cd6-fb5ae90c1b8f.png)

<p>Also, use modifiers to change the values if needed. You can modify texts, numbers, dates and some additional parameters. Learn more about each modifier <a href="https://amasty.com/docs/doku.php?id=magento_2:import_and_export#modify_values_in_export_files" target="_blank">in this section</a>. </p>

![modifier](https://user-images.githubusercontent.com/104132415/164429139-ed449af1-7d2f-4521-9bc8-f73845a521b7.png)

<p>Last, choose additional entities to export, e.g. Orders / Order Tax / Shipment, etc. and configure them in the same way. </p>

![tax](https://user-images.githubusercontent.com/104132415/164429428-7515cd11-156c-47fb-8a97-8862e2ee5d78.png)

<h4>Step 5. Add filters</h4>
<p>Select the filters to sort the data that should be placed in the file. Filter by any entity and value enabled during the fields configuration.</p> 

![fields-configuration](https://user-images.githubusercontent.com/104132415/164429931-368b8ecf-3ac6-4ae7-9fe1-ebb19db4d276.png)

<p>Once everything is configured, click the <b>Continue</b> button to generate the file. </p>

![download-file](https://user-images.githubusercontent.com/104132415/164430388-354c2965-0dff-43af-8d04-600f142d6506.png)

<h3>Import Configuration</h3>
<p>The logic of the Magento 2 import process is the same as for the export, but with some specific differences. As for the export, you need to choose the entity you want to import. </p>

![import](https://user-images.githubusercontent.com/104132415/164430753-613b68ab-3ce8-42e8-9881-6bc7116f9772.png)

<h4>Step 1. Select import behavior</h4> 
<p>Using this interface, you can add, update or delete the data provided in the file from Magento. </p>

![import-behavior](https://user-images.githubusercontent.com/104132415/164431381-9255b0e4-12b8-413e-b9cf-207896c89f19.png)

<p>Additionally, set the validation strategy: skip errors or stop the process if there are some.</p> 
<h4>Step 2. Choose file type</h4> 
<p>Similar to export, Magento 2 can import CSV and XML files.</p>

![import-format](https://user-images.githubusercontent.com/104132415/164431713-cdb343ac-555e-4d5c-b03d-7f4bd5874fd8.png)

<h4>Step 3. Provide import source</h4> 
<p>Here you can upload the file manually or specify the path of the local directory. </p>

![local-directory](https://user-images.githubusercontent.com/104132415/164432062-07c7bf18-40b4-46cf-9f05-e7cdfb29a316.png)

<h4>Step 4. Configure fields mapping</h4>
<p>If we compare it with the export, the import configuration has a reverse algorithm. Closely review the file you want to transfer —  add the fields, subentities (e.g. Magento inventory import) and match column names so that Magento could extract data correctly. See the detailed description <a href="https://amasty.com/docs/doku.php?id=magento_2:import_and_export#fields_configuration1" target="_blank">in this section</a> of the guide.</p>

![mapping](https://user-images.githubusercontent.com/104132415/164432739-6863f041-e27e-459b-8c75-9d46f676c76e.png)

<p>Please, note that Magento has a number of required fields that should be added to import data. Each entity has specific obligatory fields.</p> 
<p>Use the sample file provided in the settings if needed. </p>

![sample-file](https://user-images.githubusercontent.com/104132415/164433194-5d55898a-1dad-42d8-ac69-cdf0d7d6342c.png)

<h4>Step 5. Enable filtering</h4>
<p>No need to import all data provided in the file — activate specific filters if you want to transfer only relevant information.</p>

![import-filter](https://user-images.githubusercontent.com/104132415/164439525-b56ce598-5d5a-4730-a58c-31f634a93e2a.png)

<h4>Step 5. Validate the configuration</h4>
<p>If ready, click the <b>Check Data</b> button to validate the settings.</p> 

![validation-failed](https://user-images.githubusercontent.com/104132415/164439944-e8e076b9-02b2-463b-99a9-7c12ba06f5d4.png)

<p>Correct the mistakes (if there are any) and retry. If the configuration is correct, you can start the importing process. </p>

![validation-success](https://user-images.githubusercontent.com/104132415/164440238-1852d596-ca8b-4ddd-961b-93ccc64f2ff0.png)

<h2>Full Version Overview & Pricing Plans</h2>
<p>The full solution has <a href="https://amasty.com/import-and-export-for-magento-2.html#choose_option" target="_blank">3 pricing plans</a>: Lite, Pro and Premium. Unlike the free extension, full versions let you import and export Magento 2 orders, products, categories and other entities without additional development. Moreover, each entity includes a set of options to cover the most sophisticated business needs — for example, you can import products to Magento 2 in a CSV format already with images by specifying the relevant path.</p> 

![import-export-tariff-plans](https://github.com/AmastyLtd/module-import-export-core/assets/104132415/cc5196fb-f129-44ae-b1e4-379ff65f2e1f)


<h3>Key features of each solution:</h3>
<h4>Lite</h4> 
<ul>
<li><b>Manual import/export tasks</b> (has the same interface as the free version)</li>
<li><b>3 ready-made entities:</b> order, product, customer</li>
<li><b>2 file formats:</b> CSV, XML</li>
<li><b>2 sources:</b> file upload/local directory</li>
</ul>
<h4>Pro</h4>
<ul>
<li><b>One-time manual import/export tasks</b> (has the same interface as the free version)</li>
<li><b>Additional interface</b> to automate import and export tasks using cron jobs</li>
<li><b>3 entities:</b> order, product, customer</li>
<li><b>6 file formats:</b> CSV, XML, ODS, XLSX, Template, JSON</li>
<li><b>9 file sources:</b> File Upload, FTP/SFTP, Direct URL, Google Sheets, REST API Endpoint, Dropbox, Google Drive, Email for export</li>
<li><b>Import/export history</b></li>
 </ul>
<h4>Premium </h4>
<ul>
<li><b>Fully automated data synchronization</b> of all entities using profiles</li>
<li><b>Automatic profiles execution</b></li>
<li><b>One-time manual import/export tasks</b></li>
<li><b>9 entities:</b> orders, products, customers, CMS blocks and pages, URL rewrites, EAV attributes, catalog price rules, cart price rules, search terms and synonyms </li>
<li><b>Automation using cron jobs</b></li>
<li><b>6 file formats:</b> CSV, XML, ODS, XLSX, Template, JSON</li>
<li><b>9 file sources:</b> File Upload, FTP/SFTP, Direct URL, Google Sheets, REST API Endpoint, Dropbox, Google Drive, Email for export</li>
<li><b>Import/export histories</b> and profile running logs</li>
 </ul>
<p class="text-align: center"><a href="https://amasty.com/import-and-export-for-magento-2.html">Import and Export Premium</a></p>

![import-and-export-premium-key-features](https://github.com/AmastyLtd/module-import-export-core/assets/104132415/8aeeb453-4d0d-4566-a26b-fc7225d9d27a)


If you need a specific entity, but with the automation options, you can purchase the main ones separately:  
<br>
-> <a href="https://amasty.com/import-orders-for-magento-2.html" target="_blank">Import Orders</a><br>
-> <a href="https://amasty.com/export-orders-for-magento-2.html" target="_blank">Export Orders</a><br>
-> <a href="https://amasty.com/import-products-for-magento-2.html" target="_blank">Import Products</a><br>
-> <a href="https://amasty.com/export-products-for-magento-2.html" target="_blank">Export Products</a><br>
-> <a href="https://amasty.com/import-customers-for-magento-2.html" target="_blank">Import Customers</a><br>
-> <a href="https://amasty.com/export-customers-for-magento-2.html" target="_blank">Export Customers</a><br>
<h2>Troubleshooting </h2>
<p><i>Have any questions? Feel free to <a href="https://amasty.com/contacts/">contact us</a>!</i></p> 
<p><i>Want us to develop a custom integration? <a href="https://amasty.com/magento-integration-service.html">Find the details here.</a>.</i></p>  

