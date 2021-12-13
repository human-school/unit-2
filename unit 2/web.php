<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/login_template.dwt" codeOutsideHTMLIsLocked="false" -->
	<link rel='icon' href='/images/iss.ico' type='image/x-icon'/ >
<head>
	<script>

    var toggleimage=new Array("/images/1.jpg","/images/2.jpg")

    //do not edit the variables below
    var image_1=new Image()
    var image_2=new Image()

	
    image_1.src=toggleimage[0]
    image_2.src=toggleimage[1]

    var i_image=0

    function testloading() {
        isloaded=true
    }

    function toggle() {
        if (isloaded) {
            document.togglepicture.src=toggleimage[i_image]
        }
        i_image++
        if (i_image>1) {i_image=0}
    }
    onload=testloading
    </script>


<meta charset="UTF-8">
<title>source</title>
<!-- InstanceParam name="main" type="boolean" value="true" -->
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="%" height=""><a href="logout.php"><img src="images/ERROR%20404VACATION%20NOT%20FOUND%20(200%20x%20200%20px).png" width="150" height="144" alt=""/></a></td>
      <td width="93%"><a href="https://github.com/this-is-for-a-school-thing/unit-2"><img src="images/source%20code.png" width="100%" height="144" alt=""/></a></td>
    </tr>
    <tr>
      <td height="742" valign="top"><p><d></d>
        <a href="logout.php"><img src="images/Sign%20Out%20Of%20Your%20Account-1.png" width="150" height="40" alt=""/></a></p>
      <p><a href="reset-password.php"><img src="images/reset.png" width="150" height="40" alt=""/></a></p></td>
      <td><!-- InstanceBeginEditable name="EditRegion1" -->
        <p>History of the Internet:<br>
          The internet was started in the  1960&rsquo;s as a way for government scientists to share information since computers  were bulky and heavy so they couldn&rsquo;t be moved. It was called ARPANET and only  specific people from different stations and universities could access it. <br>
          In 1970, the TCP/IP protocol was  made with a connection between computers being established via ethernet cables.<br>
          In the 1980&rsquo;s, Phone lines were established  and they were connected to the network, which allowed for email communication  across multiple nations. <br>
          In the 1990&rsquo;s ARPANET is  decommissioned. HTML and URL are made showing the birth of the World wide web.  Java is made which allows for animations and Microsoft launched windows 95, Amazon,  Yahoo and eBay are all launched along with internet explorer. <br>
          2000 features the rise of dotcom  with multiple internet-based businesses rising up. It also features the massive  growth of google search engine and the emergence of Wi-Fi.</p>
        <p>Description features of the  internet: </p>
        <ul>
          <li>WWW  stands for the World Wide Web, which is basically hyperlinks linking anything  to another thing (documents to another document). For example, you could link  words on the front page of a search to the website that it is about.  </li>
          <li>Chat  allows for conversations between different people(s) or groups in either real  time or not, it is basically any type of conversation between two people on the  internet.</li>
          <li>Newsgroups  are usually conversations about a topic between multiple people. They allow  people to find information about a topic they may know or not know about and  discuss about it. It can also be used for posting and reading regularly updated  information about a certain topic (news).</li>
          <li>Email  allows for the sending of messages and files from one machine (phone, computer,  fridge) to another, you usually need a profile. This is usually inconvenient  though for real time conversations, but it can be used for it</li>
          <li>FTP  stands for file transfer protocol which is used for the transfer of files from  a computer (system) to another over the internet {(using the internet to  transfer the file(s)}</li>
          <li>IRC  stands for internet relay chat. It is a text base chat system that allows any  number of people to talk to each other in groups called channels. This is also  applicable for conversations between 1 person to another.</li>
        </ul>
        <p>Protocols used on the internet:</p>
        <ul>
          <li>HTTP  stands for Hypertext transfer protocol which grabs/fetches pages on the  internet to a server and onto the user&rsquo;s browser.</li>
          <li>WWW  stands for the World wide web which has interlinking pages (documents) that can  be accessed by a web browser</li>
          <li>SMPT  stands for simple mail transfer protocol which is used for sending emails from  one account to another over the internet.</li>
          <li>IP  stands for internet protocol which is a set of rules for delivering data over  the internet and making sure that they get to the correct destination or  machine. Every device or domain connected to the internet is assigned an ip  address, which is used to make sure packets of data arrive at the right  location (it is like the post address)</li>
          <li>PPP  stands for point-to-point protocol which is used to establish a direct  connection between two points on the internet directly without interference  with hosts or any other networking in between and is used to deliver packets of  data (this is like the postman)</li>
        </ul>
        <p>&nbsp;</p>
        <p>The internet has changed almost  everything about modern everyday life, so much so that it would take up  multiple pages, just for describing the changes because it is used in basically  everything. Some important changes include cyber security, because people can  now harm others for their own gain or enjoyment using the internet. Businesses  now commonly use the internet because of the larger amount of people on it as  well as other ways to sell their products. With education, people can use the internet  for learning, because there are more resources on the internet for them to  access and it may be easier for them to access. Socially, it has expanded  massively, you could talk to anyone in the world, and it allows for easier ability  to talk with friends.</p>
        <p>&nbsp;</p>
        <p>Mobile phones have affected the  design of websites tremendously because they are the most common device used to  access the internet anywhere and anytime. They have inspired the design of a  much cleaner navigation with buttons and not URLs, links or hyperlinks. A much cleaner  website format with images that attract people as well as enlarged, easy to  read text. Scrolling on a website has been introduced again to account for the  smaller width of a website and the extra content inside them. Websites have  also been designed with the screen width shrinking or growing in mind and they  are even prioritised by the google search engine.</p>
        <p>The future on blogging will most  likely be phased out and be replaced with video sharing sites, social media  sites and streaming. This has already happened, and I think the only changes  that would be different from now would be sites having changed names and more sites  having the same purpose appearing. They may also have an evolved or different  interface.<br>
          The future of online shopping is  that with more people having access to the internet, there will inevitably there  will be more people using the internet online shopping. The only changes I  think would appear in the future would be more sites dedicated to shopping <br>
          The future of podcasting is most  likely going to get bigger for a while, however I don&rsquo;t think they will get as  popular as a lot of other media sharing sites, they will appeal to the people  who would like to listen to their entertainment without being distracted by other  visual sources.<br>
          The future of social media will  most likely be a common thing to see or interact with in everyday life. This is  because social media encompasses a surprising number of things that some people  wouldn&rsquo;t consider. Some things include, videos, news, chats, shared pictures,  anything which interacts with or is from another person online.<br>
          The future of online gaming can  change both a small amount and a large amount, this depends mostly on hardware and  less so on the internet. Some changes I think could happen with online gaming  include a larger amount of people playing games, gaming being a viable career  option, bigger and better games being made, and different ways to play a game  such as better VR accessibility.</p>
        <p>&nbsp;</p>
      <!-- InstanceEndEditable --></td>
    </tr>
  </tbody>
</table>
</body>
<!-- InstanceEnd --></html>
