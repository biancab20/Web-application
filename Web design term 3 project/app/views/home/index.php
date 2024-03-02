<!-- What is there to do? -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harlem Festival</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .event-bg {margin-left: 50px; margin-right: 50px;}
         body { background-color: #000; }
        .fest-bg { background-color: #333; }
        .section-bg { background-color: #000; }
        .schedule-bg { background-color: #222; }
        .event-bg { background-color: #fff; }
        .text-gold { color: #000; }
        .text-dim-white { color: rgba(255, 255, 255, 0.7); }
    </style>
</head>

<body class="antialiased font-'Open Sans'">
<?php include __DIR__ . '/../header.php';

// Initialize the repository
$repository = new App\Repositories\userRepository();

// Fetch users
$users = $repository->getUsers();
?>
    <main>
    <section class="section-bg py-10 px-4">
        <h2 class="text-4xl font-bold text-center mb-8 text-white">WHAT IS THERE TO DO?</h2>

        <div class="bg-yellow-500 text-black text-center py-4 px-6">
            <p>Indulge in Haarlem's vibrant tapestry—immerse in cultural marvels within museums and iconic windmills, 
                savor the city's culinary delights, and let kids revel in a mobile event tied to the Taylers Museum. 
                For the night owls, "Dance" beckons with lively hotspots. Discover history, flavors, family fun, 
                and nightlife in this captivating city—a blend of past, present, and endless possibilities.</p>
        </div>

        <div class="container mx-auto grid grid-cols-1 gap-4"></div>

    </section>

        <div class="container mx-auto grid grid-cols-1 gap-4">
            
        <!-- Dance -->
            <div class="event-bg rounded-lg p-6">
                <img src="C:\Users\baezd\Desktop\App V2\Term-2.3-Web-Project\Web design term 3 project\app\public\assets\images\Home_page_Images\Dance_Image_Homepage.jpg" 
                alt="A vibrant dance event with people enjoying music and performances" 
                class="rounded-lg">
                <h3 class="text-gold text-2xl font-bold mt-4">Dance!</h3>
                <p class="text-gray-600 mt-2">If you are a music enthusiast, Haarlem is THE PLACE for YOU!
                With lots of bars and music venues, you can find any kind of music you might like: from the 
                best techno parties to live bands playing jazz and songwriter’s concerts.
                Suitable for young adults, families and people with special needs, Haarlem has a place for everyone!</p>
                <a href="#" class="bg-yellow-500 text-white py-2 px-4 rounded mt-4 inline-block">Learn More</a>
            </div>

            <!-- Food -->
            <div class="event-bg rounded-lg p-6">
                <img src="C:\Users\baezd\Desktop\App V2\Term-2.3-Web-Project\Web design term 3 project\app\public\assets\images\Home_page_Images\Dance_Image_Homepage.jpg" 
                alt="Delicious food offerings from various Harlem restaurants" 
                class="rounded-lg">
                <h3 class="text-gold text-2xl font-bold mt-4">Yummy!</h3>
                <p class="text-gray-600 mt-2">Discover the hidden gems of Haarlem's vibrant culinary scene as we bring you a feast for the senses. 
                    While Haarlem may not be a global culinary icon, our city is home to a diverse array of restaurants that are sure to captivate 
                    your taste buds. Dive into a world of gastronomic delights, where each bite tells a unique story.</p>
                <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded mt-4 inline-block">Learn More</a>
            </div>

            <!-- History -->
            <div class="event-bg rounded-lg p-6">
                <img src="https://placehold.co/300x200" 
                alt="Historical sites and museums offering a walk through Harlem's history" 
                class="rounded-lg">
                <h3 class="text-gold text-2xl font-bold mt-4">A Stroll Through History</h3>
                <p class="text-gray-600 mt-2">Haarlem, a city rich in history and adorned with captivating tales, 
                    offering a treasure trove of landmarks waiting to be explored. 
                    We invite you to immerse yourself in this enchanting blend of antiquity and modernity, 
                    where the past's timeless charm meets the vibrant pulse of the present—a perfect opportunity 
                    to discover and indulge in the city's breath-taking splendor."</p>
                <a href="#" class="bg-red-500 text-white py-2 px-4 rounded mt-4 inline-block">Learn More</a>
            </div>
        </div>
    </section>
</main>
</body>

<div style="height: 20px;"></div>

<!-- Festival Location -->
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Festival Location</title>

<style>

.event-bg {margin-left: 50px; margin-right: 50px;}

  .festival-location-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;}

  .info-box {
    width: 45%;
    padding: 20px;
    background-color: #FFD700;
    color: #000;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;}

  .section-title {
    font-size: 36px;
    color: #444;
    text-align: center;
    width: 100%;
    margin: 40px 0;}

  .btn{
    display: inline-block;
    padding: 10px 20px;
    margin-top: 20px;
    background-color: red;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    text-align: center;}

</style>
</head>
<body>
<div class="festival-location-section rounded-lg p-6" style="margin-left: 50px; margin-right: 50px;">
  <div class="info-box rounded-lg">
    <h2>WHERE IS THE FESTIVAL?</h2>
    <p>Discover the magic of The Festival in the vibrant city of Haarlem, 
        nestled to the west of Amsterdam and north of The Hague. 
        The festival takes place across the entire city of Haarlem, but most noticeably in the center. 
        Join us for an unforgettable experience!</p>
    <a href="#" class="btn">Check festival schedule</a>
  </div>

  <div><iframe src="https://placehold.co/300x200"></iframe></div>
  
  </div>
</body>
</html>

<div style="height: 20px;"></div>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Schedule</title>
<script src="https://cdn.tailwindcss.com"></script>
<style> </style>
</head>
<body>
<div class="font-sans bg-black text-white py-10">
  <div class="text-center text-4xl mb-10">SCHEDULE OF THE EVENTS</div>
  
  <!-- Dates -->
  <div class="flex justify-center space-x-8 mb-10">
    <div class="text-center">
      <div class="text-6xl">25</div>
      <div class="text-xl">Jul</div>
      <div>Thursday</div>
    </div>
    <div class="text-center">
      <div class="text-6xl">26</div>
      <div class="text-xl">Jul</div>
      <div>Friday</div>
    </div>
    <div class="text-center">
      <div class="text-6xl">27</div>
      <div class="text-xl">Jul</div>
      <div>Saturday</div>
    </div>
    <div class="text-center">
      <div class="text-6xl">28</div>
      <div class="text-xl">Jul</div>
      <div>Sunday</div>
    </div>
  </div>
  
  <!-- Events -->
  <div class="space-y-10 px-20">
    <!-- Historical Tour -->
    <div class="border-t border-gray-400 pt-8">
      <div class="text-4xl font-bold mb-4 text-white bg-black py-4">A Stroll Through History</div>
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
          <img src="https://placehold.co/300x200" alt="Historical Tour" class="w-full h-auto">
        </div>
        <div class="col-span-2 text-base">
          The event takes place every day, the hours when the tours start are always 10:00, 13:00, 16:00. 
          The tours are available in multiple languages.
        </div>
      </div>
    </div>
    
    <!-- Food Festival -->
    <div class="border-t border-gray-400 pt-8">
      <div class="text-4xl font-bold mb-4 text-white bg-black py-4">Yummy!</div>
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
          <img src="https://placehold.co/300x200" alt="Food Festival" class="w-full h-auto">
        </div>
        <div class="col-span-2 text-base">
          Reservations can be made during the period of the festival at various restaurants 
          across Haarlem at various hours depending on the restaurant.
        </div>
      </div>
    </div>
    
    <!-- Dance Event -->
    <div class="border-t border-gray-400 pt-8">
      <div class="text-4xl font-bold mb-4 text-white bg-black py-4">Dance!</div>
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
          <img src="https://placehold.co/300x200" alt="Dance Event" class="w-full h-auto">
        </div>
        <div class="col-span-2 text-base">
          The event takes place on the dates of 26, 27 and 28. Multiple artists will play 
          their music at different places across Haarlem. Most of the concerts will take place in the evening and during the night.
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<!-- Teylor Museum -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Section</title>
    <style>

        .event-section {
            background-color: #fff;
            text-align: center;
            padding: 10px;
            font-family: 'Arial', sans-serif;}

        .event-title {
            color: red;
            font-size: 48px;
            margin-bottom: 10px;}

        .mobile-event {
            color: red;
            font-size: 30px;
            margin-bottom: 20px;}

        .event-description {
            color: black;
            font-size: 20px;
            margin-bottom: 20px;}
    </style>

</head>
<body>
<div class="event-section">

    <div class="event-title">The Secret of Professor Teyler</div>

    <div class="mobile-event">(mobile event)</div>

    <div class="event-description">
        Looking for a great way to keep your kids entertained? 
        Join in on the excitement with The Teyler Museum's 
        scavenger hunt during the festival! Get started by downloading 
        the activity app—just scan the QR code to begin the adventure.
    </div>
</div>

<div style="height: 20px;"></div>
<div style="height: 20px;"></div>

<?php include __DIR__ . '/../footer.php';?>
</body>
</html>
