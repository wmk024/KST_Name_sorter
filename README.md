# KST_Name_sorter
Web applicaiton sorter

by William Karyose

Hello there this is the name sorter web application that uses Laravel 8 framework and Bootstrap library to make it look nicer
reminder: please make sure you have downloaded composer in you device, here is a link on how to download composer:
https://www.youtube.com/watch?v=BGyuKpfMB9E

Step 1.
Install Laravel using composer in terminal such as cmd or powershell

        composer global require laravel/installer

‘cd’ to the file that you want to have the larval file then
Type this in your terminal

        laravel new name_sorter_app

        cd sorter_app

        php artisan serve

step 2.
Type this in your terminal to have a link from the storage to public folder

        php artisan storage:link

step 3.
Copy all the content from the views folder that you have download and paste them in the views folder that’s locate in the resources folder,
do replace if there is any file with the same name

Step 4.
Copy all the content from the Controllers folder that you have download and paste them in the Controllers folder that’s locate in the HTTP folder which is located in the app folder, do replace if there is any file with the same name

Step 5.
Replace the Web.php file with the web.php file that was downloaded, the file is located in the routes folder .

Step 6.
Open your browser of choice and type the port as a URL. the port is shown when you run the php artisan serve it should look like this
'http://127.0.0.1:8000' it may differ between different computers

Step 7.
Refresh the browser page and the webpage lets you input the text file and pressing the button would sort the name and bring you to another page.

step 8.
once the button is pressed the and the file is trnaslated it will be shown on screen, and there is a button that lets you to download the sorted_name_list.txt file.

P.S.
I hope it works well please do inform me if there is soemthing that is unclear.
