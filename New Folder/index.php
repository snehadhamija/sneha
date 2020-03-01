<?php

$request = new HttpRequest();
$request->setUrl('http://localhost:80/sneha/New Folder/beat');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
  'cache-control' => 'no-cache',
  'Connection' => 'keep-alive',
  'Content-Length' => '288',
  'Accept-Encoding' => 'gzip, deflate',
  'Host' => 'localhost:8080',
  'Postman-Token' => '25b83b1f-1944-4193-9120-f8b9f07379f9,3324b72e-0f2a-4fd3-aa6d-1cf911b2fcc5',
  'Cache-Control' => 'no-cache',
  'Accept' => '/',
  'User-Agent' => 'PostmanRuntime/7.17.1',
  'Content-Type' => 'application/json'
));

$request->setBody('{
    "fullName": "Sugasini.C",
    "mobileNumber": "9787647062",
    "email": "sugasini.c@stanzaliving.com",
    "hostels": [
        {
            "id": 109
        }
    ],
    "userProfiles": [
        {
            "id": 18
        },
        {
            "id": 23
        }
    ]
}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>
<!DOCTYPE HTML>
<html>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->
   
     <?php include("top-nav.php"); ?>
		
	<div class="full">
    <div class="col-md-3 top-nav">
			<?php include("left-nav.php"); ?>
		<!--banner-section-->
	<div class="col-md-9 main">
		<?php include("banner.php"); ?>
			<!--//banner-section-->
			 <?php include("bottam.php"); ?>
					<!--//top-news-->
		     
			<?php include("news.php"); ?>
			<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
	
	     
