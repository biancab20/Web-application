<?php
require __DIR__ . '/../../components/personal_program/getAgendaData.php';
require __DIR__ . '/../../utilities/pdfService.php';
$pdfService = new App\Controllers\PdfService();
$pdfFilePath = $pdfService->generatePersonalProgramPdf();
echo '<a href="/path/to/public/pdf/' . basename($pdfFilePath) . '">Download your personal program</a>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require __DIR__ . '/../../components/general/commonDataHeaderTailwind.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link rel="stylesheet" href="CSS_files/agenda_view.css">
</head>

<body class="bg-black text-white flex flex-col min-h-screen">

    <?php require __DIR__ . '/../../components/general/topBar.php'; ?>

    <div class="flex flex-col flex-grow">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-4xl mx-auto p-8">

                <?php require __DIR__ . '/../../components/personal_program/shareLinks.php'; ?>
                

                <div id='calendar'></div>

                <?php require __DIR__ . '/../../components/personal_program/displayUnpurchasedReservations.php'; ?>

                <div class="mt-10 flex justify-end gap-4">
                    <a href="/personalProgramListView">
                        <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Purchase All Tickets
                        </button>
                    </a>
                </div>

            </div>
        </div>
        <?php include __DIR__ . '/../../components/general/footer.php'; ?>
    </div>

    <script type="text/javascript">
        const reservations = <?php echo json_encode($reservationData); ?>;
        console.log(reservations);
        const danceTicketsForAgenda = <?php echo json_encode($danceTicketsForAgenda); ?>;
        console.log(danceTicketsForAgenda);
        const historyTicketsForAgenda = <?php echo json_encode($historyTicketsForAgenda); ?>;
        console.log(historyTicketsForAgenda);
        const historyFirstRoute = <?php echo json_encode($historyFirstRoute); ?>;
        console.log(historyFirstRoute);
    </script>

    <script type="module" src="javascript/Personal_Program/personal_program_agenda_view.js"></script>
    <script type="module" src="javascript/Personal_Program/personal_program_listview.js"></script>

</body>

</html>