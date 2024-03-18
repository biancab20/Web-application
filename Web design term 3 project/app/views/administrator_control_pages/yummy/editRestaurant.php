<?php
use App\Services\YummyService;

$yummyService = new YummyService();
$restaurant = $yummyService->getRestaurantById($_GET['id']);
$reviews = $yummyService->getRestaurantReviews($_GET['id']);
$gallery = $yummyService->getRestaurantImagePathGallery($_GET['id']);
$sessions = $yummyService->getRestaurantSession($_GET['id']);

$cusineTypes = explode(";", $restaurant->cuisineTypes);

?>


<!DOCTYPE html>
<html lang="en">

<?php require __DIR__ . '/../../../components/admin/header.php'; ?>

<body class="bg-gray-200">
    <div class="flex min-h-screen overflow-hidden">

        <?php require __DIR__ . '/../../../components/admin/sidebar.php'; ?>

        <div class="flex-grow p-6">
            <h1 class="text-5xl font-bold text-center mb-6 text-red-900">
                <?php echo ($restaurant->name); ?>
            </h1>
            <!-- Restaurant Table Info Section ------------------------------------------------------- -->
            <h1 class="text-3xl text-center mb-6">Restaurant Information</h1>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div id="container-restaurant-info"
                    class="p-4 border-b border-gray-200 flex justify-between items-start"
                    data-id="<?php echo htmlspecialchars($_GET['id']); ?>">
                    <div>
                        <p class="text-2xl text-blue-500">Name of restaurant:</p>
                        <p data-type="name" class="text-lg font-semibold editable" contenteditable="false">
                            <?php echo htmlspecialchars($restaurant->name); ?>
                        </p>
                        <p class="text-2xl text-blue-500">Location:</p>
                        <p data-type="location" class="text-lg font-semibold editable" contenteditable="false">
                            <?php echo htmlspecialchars($restaurant->location); ?>
                        </p>
                        <p class="text-2xl text-blue-500">Description:</p>
                        <p data-type="description" class="text-lg font-semibold editable" contenteditable="false">
                            <?php echo htmlspecialchars($restaurant->descriptionTopPart); ?>
                        </p>
                        <p class="text-2xl text-blue-500">Description Left Side:</p>
                        <p data-type="descriptionSideOne" class="text-lg font-semibold editable"
                            contenteditable="false">
                            <?php echo htmlspecialchars($restaurant->descriptionSideOne); ?>
                        </p>
                        <p class="text-2xl text-blue-500">Description Right Side</p>
                        <p data-type="descriptionSideTwo" class="text-lg font-semibold editable"
                            contenteditable="false">
                            <?php echo htmlspecialchars($restaurant->descriptionSideTwo); ?>
                        </p>
                        <p class="text-2xl text-blue-500">Number of Seats:</p>
                        <input type="number" id="numberSeats" class="text-lg font-semibold text-black-500"
                            value="<?php echo htmlspecialchars($restaurant->numberOfSeats); ?>" min="0" readonly>

                        <p class="text-2xl text-blue-500">Number of Stars:</p>
                        <input type="number" id="numberStars" class="text-lg font-semibold text-black-500"
                            value="<?php echo htmlspecialchars($restaurant->rating); ?>" min="0" max="5" readonly>
                    </div>

                    <button id="edit-restaurant-btn"
                        class="edit-restaurant-btn py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 transition duration-150">Edit</button>
                </div>

                <p class="text-2xl text-blue-500">Cuisine Types:</p>
                <div class="container-cuisine-types flex flex-wrap">
                    <?php foreach ($cusineTypes as $type): ?>
                        <div class="bg-gray-300 rounded-full m-1 flex items-center">
                            <p
                                class="cuisine-type text-lg font-semibold text-black-500 bg-gray-300 rounded-full px-2 py-1 m-1">
                                <?php echo htmlspecialchars($type); ?>
                            </p>
                            <button
                                class="delete-cuisine-btn py-1 px-2 bg-red-500 text-white rounded-full hover:bg-red-700 transition duration-150">Delete</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="add-cuisine-container">
                    <input type="text" id="new-cuisine-type" placeholder="Enter new cuisine type"
                        class="text-lg font-semibold text-black-500 rounded-full px-2 py-1 m-1">
                    <button id="add-cuisine-btn"
                        class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 transition duration-150">Add</button>
                </div>


                <div> <!-- images on the individual page -->
                    <p class="text-3xl text-blue-500">Image at the top of the page:</p>
                    <div>
                        <img id="imageTop" src="<?php echo htmlspecialchars($restaurant->imagePathHomepage); ?>"
                            alt="Image 1" class="mt-2" style="width: 200px; height: auto;">
                        <input type="file" id="imageTopInput" class="hidden" accept="image/*">
                        <button onclick="document.getElementById('imageTopInput').click();"
                            class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 transition duration-150 mt-2">Change
                            Image
                        </button>
                    </div>
                    <p class="text-3xl text-blue-500">Image with location:</p>
                    <div>
                        <img id="imageLocation" src="<?php echo htmlspecialchars($restaurant->imagePathLocation); ?>"
                            alt="Image 1" class="mt-2" style="width: 200px; height: auto;">
                        <input type="file" id="imageLocationInput" class="hidden" accept="image/*">
                        <button onclick="document.getElementById('imageLocationInput').click();"
                            class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 transition duration-150 mt-2">Change
                            Image
                        </button>
                    </div>
                    <p class="text-3xl text-blue-500">Image of the chef:</p>
                    <div>
                        <img id="imageChef" src="<?php echo htmlspecialchars($restaurant->imagePathChef); ?>"
                            alt="Image 1" class="mt-2" style="width: 200px; height: auto;">
                        <input type="file" id="imageChefInput" class="hidden" accept="image/*">
                        <button onclick="document.getElementById('imageChefInput').click();"
                            class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 transition duration-150 mt-2">Change
                            Image
                        </button>
                    </div>
                </div>

                <!-- Restaurant Table Info Section ------------------------------------------------------- -->



            </div>


            <!-- Session Table Info Section ------------------------------------------------------- -->
            <h1 class="text-3xl text-center mb-6">Restaurant Sessions</h1>
            <div class="flex flex-wrap -mx-4"> <!-- Container for the cards -->
                <?php foreach ($sessions as $session): ?>
                    <div class="card-container p-4 md:w-1/2 lg:w-1/3"
                        data-id="<?php echo htmlspecialchars($session->sessionID); ?>">
                        <!-- Each card -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6"> <!-- Card styling -->
                            <h2 class="text-xl font-semibold mb-2">Session ID:
                                <?php echo htmlspecialchars($session->sessionID); ?>
                            </h2>
                            <!-- Editable fields -->
                            <div class="mb-4">Available Seats:
                                <input type="number" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars($session->availableSeats); ?>"
                                    data-field="availableSeats">
                            </div>
                            <div class="mb-4">Prices for Adults: €
                                <input type="text" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars($session->pricesForAdults); ?>"
                                    data-field="pricesForAdults">
                            </div>
                            <div class="mb-4">Prices for Children: €
                                <input type="text" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars($session->pricesForChildren); ?>"
                                    data-field="pricesForChildren">
                            </div>
                            <div class="mb-4">Reservation Fee: €
                                <input type="text" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars($session->reservationFee); ?>"
                                    data-field="reservationFee">
                            </div>
                            <div class="mb-4">Start Time:
                                <input type="time" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars(substr($session->startTime, 0, 5)); ?>"
                                    data-field="startTime">
                            </div>
                            <div class="mb-4">End Time:
                                <input type="time" class="session-input bg-gray-200 p-2 rounded"
                                    value="<?php echo htmlspecialchars(substr($session->endTime, 0, 5)); ?>"
                                    data-field="endTime">
                            </div>
                            <!-- Save and Delete buttons -->
                            <div class="flex justify-between">
                                <button
                                    class="save-session-btn py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700 transition duration-150">Save</button>
                                <button
                                    class="delete-session-btn py-2 px-4 bg-red-500 text-white rounded hover:bg-red-700 transition duration-150"
                                    data-session-id="<?php echo htmlspecialchars($session->sessionID); ?>">Delete</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="add-session-container p-4">
                    <h2 class="text-xl font-semibold mb-2">Add New Session</h2>
                    <!-- New Session fields -->
                    <div class="mb-4">Available Seats:
                        <input type="number" class="new-session-input bg-gray-200 p-2 rounded"
                            data-new-field="availableSeats">
                    </div>
                    <div class="mb-4">Prices for Adults: €
                        <input type="text" class="new-session-input bg-gray-200 p-2 rounded"
                            data-new-field="pricesForAdults">
                    </div>
                    <div class="mb-4">Prices for Children: €
                        <input type="text" class="new-session-input bg-gray-200 p-2 rounded"
                            data-new-field="pricesForChildren">
                    </div>
                    <div class="mb-4">Reservation Fee: €
                        <input type="text" class="new-session-input bg-gray-200 p-2 rounded"
                            data-new-field="reservationFee">
                    </div>
                    <div class="mb-4">Start Time:
                        <input type="time" class="new-session-input bg-gray-200 p-2 rounded" data-new-field="startTime">
                    </div>
                    <div class="mb-4">End Time:
                        <input type="time" class="new-session-input bg-gray-200 p-2 rounded" data-new-field="endTime">
                    </div>
                    <!-- Create button -->
                    <button
                        class="create-session-btn py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 transition duration-150">Create
                        New Session</button>
                </div>
            </div>

        </div>
    </div>
    </div>

    <script src="javascript/Yummy/edit_restaurant_admin.js"></script>

</body>

</html>