<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | </title>
	<meta name="description" content>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>

body {
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.banner {
    position: relative;
    width: 1200px;
    height: 600px;
    background-color: #ffc0cb; /* Baby Pink */
    overflow: hidden;
}

img {
    position: absolute;
    width: 300px; /* Adjust the size as needed */
    top: 50%; /* Center vertically */
    animation: slideIn 2s ease-in-out; /* Animation for entering from left */
}

.animated-text {
    position: absolute;
    top: 50%; /* Center vertically */
    right: 0;
    font-size: 24px; /* Adjust the font size as needed */
    animation: fadeIn 2s ease-in-out; /* Animation for text */
}

@keyframes slideIn {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
</style>
</head>
<body>
    <div class="banner">
        <img src="<?= base_url()?>assets/images/spaceno_bg.png" alt="Your Image">
        <div class="animated-text">Your Animated Text</div>
    </div>
</body>
</html>
