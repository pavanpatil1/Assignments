 <center><h2> Assignments </h2></center>

 <b><h4>Description : </h4></b>

<b><h4>How to Setup Local Machine</h4></b>
<p>To setup your local machine you need to install some software. i will tell you </p>

<ul>
<li>Composer
</li>
<li>Codeception</li>
<li>Selenium jar file</li>
<li>Web Driver</li>
</ul>
<br /><br />

1. First check whether composer is install or not in your machine open your command line and type command <code>composer --version </code>

![composer](https://user-images.githubusercontent.com/44057535/121112451-0b62b080-c82e-11eb-9487-81696b6cb212.png)

2. if you see<code>composer is not internal or external command</code> in CMD then we need to install composer on your local machine.

3. To install composer simply go to this url https://getcomposer.org/. In download Section you will able to find download links. if you are windows user then download exe file and directly install and if you are using other operating system then you can go with command line installation.


![image](https://user-images.githubusercontent.com/44057535/121112752-7a400980-c82e-11eb-8576-681374555779.png)

4.After installation you can verify that with <code>composer --version </code> this command.

5. After sucessful installation of composer we need to install <b>Codeception</b> in your local machine. As we know codeception is an testing framework of PHP application. so we need to install that. so for that simply put this command on CMD <br > <code>composer require "codeception/codeception" --dev</code>. &nbsp;&nbsp; See below image you will get an idea about it.

![install_codeception_via_composer](https://user-images.githubusercontent.com/44057535/121113645-056dcf00-c830-11eb-880e-c7ee42f1af2c.png)

this will sucessfully install codeception in your local machine. After that we need to create project. 

6. So to create a project Run this command <code>php vendor/bin/codecept bootstrap</code>.

![create_codecept_project](https://user-images.githubusercontent.com/44057535/121114203-ee7bac80-c830-11eb-80e7-8da229157b65.png)

this will create one folder tests folder. see below image.

![after_build_folder](https://user-images.githubusercontent.com/44057535/121114291-14a14c80-c831-11eb-9ab4-3ef4e32dd419.png)

7. After that we need to install Selenium jar file and Web driver. so for that go to https://www.selenium.dev/downloads/ see below image you will get an idea how we can download.

![image](https://user-images.githubusercontent.com/44057535/121115938-6c40b780-c833-11eb-86af-0f1278f8a5e4.png)

so to download web driver scroll down and in browsers section you will able to find out web driver for different browsers. Download the Chrome browser driver , unzip the folder and copy chromedriver.exe and put in our project folder. 

![image](https://user-images.githubusercontent.com/44057535/121116227-cf324e80-c833-11eb-9b78-ab2563bf7827.png)

So Finaly your folder looks like this 

![image](https://user-images.githubusercontent.com/44057535/121116684-8f1f9b80-c834-11eb-9a14-7c1188688305.png)

<h5>Setup Assignment Repo on Local ⭐<h5>
so your local machine setup sucessfully for codeception. To setup this Assignments repo on your local machine you can clone this just by writing command in your git <code> git clone https://github.com/pavanpatil1/Assignments.git </code> or else you can directly download zip. After downloading of project you will able to see one <code>images</code> folder all the images in this image folder put that all images in <code> _data </code> Folder of tests directory. all Automation files in root directory copy that all files except <code>acceptance.suite.yml</code>. Put that all files in <code>acceptance</code> folder. So finally your Folders looks like this....

 ![image](https://user-images.githubusercontent.com/44057535/121117618-0d307200-c836-11eb-9c61-e57298cc9549.png)
![image](https://user-images.githubusercontent.com/44057535/121117553-f12cd080-c835-11eb-80fa-a1c1cac3f1ca.png)
![image](https://user-images.githubusercontent.com/44057535/121118216-1968ff00-c837-11eb-8dbf-3ad4c5cb7539.png)

 your Machine setup sucessfully 🙌. 

 <b><h4>How to Run it on Local Machine 🌟</h4></b>

  In this we are goining to see how you run this files on your local enviornment. Open command line from your assignment folder. First we need to start the Selenium and web driver. without them we cannot run our files. So to start Selenium open CMD and type <code>java -jar selenium-server-standalone-3.12.0.jar</code> this will start your selenium-server on port 4444 by default you can change port also by writing in command. 
  
![image](https://user-images.githubusercontent.com/44057535/121121749-cb0b2e80-c83d-11eb-8d51-26ba23490f5f.png)
  
after that double click on chromedriver exe file that will start your driver directly.  

![image](https://user-images.githubusercontent.com/44057535/121121895-1cb3b900-c83e-11eb-8892-b97441c9e61c.png)

 After that just put this command on CMD <code>php vendor/bin/codecept run acceptance FirstCest.php</code> this will run your first test case. it's start your chrome browser automatically like this... 
  
![image](https://user-images.githubusercontent.com/44057535/121122640-723c9580-c83f-11eb-9434-feaffc7331f1.png)
  
After sucessfully execution of test case you will able to see ![image](https://user-images.githubusercontent.com/44057535/121122733-98623580-c83f-11eb-988b-b78ccdf4407c.png)
  

So this is how you can setup and run this repo on your local machine. Thank you so much for reading this i belive this will definelty help you to setup your machine. if you finds any difficulty at any point just ping me <a href="mailto:patilpavan631@gmail.com">patilpavan631@gmail.com</a>. Just follow the steps. ⬅️ Thank you 🙌🙌


  


  
  
