<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Tax Returns</title>
    <link rel="shortcut icon" href="assets/img/logo/favicon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="antialiased">
    <?php include 'header.php' ?>

    
    <div class="container xl:w-[1280px] mx-auto mb-16 text-slate-900 px-3">
    
    <h2 class="text-3xl font-bold md:text-4xl tracking-wide mt-6 mb-3 text-center uppercase">Income tax returns</h2>
    <h3 class="text-lg tracking-wider font-medium text-center mb-16 md:text-xl px-10 pt-2 capitalize text-emerald-800">A business entity need to files various tax returns such as TDS, VAT, Service Tax, Business Income Tax Return etc. Get a Expert file your all business returns with the authorities.</h3>


     <div class="flex flex-col md:flex-row justify-center items-center flex-wrap gap-x-10 gap-y-6 " >

        <div class="b-0 rounded-xl bg-emerald-200 font-semibold flex flex-row  w-fit justify-center items-center hover:ring-4 hover:ring-gray-800 cursor-pointer shadow-lg p-4 transform transition duration-500 hover:scale-110" onclick="location.href='./traders_package.php';">
            <img src="./assets//img//icons//file_tax//traders_package.png" class="h-12 w-fit pr-2"/>
            <a class="w-[15rem]">Salary/Trading Income</a>
        </div>
        <div class="b-0 rounded-xl bg-emerald-200 font-semibold flex flex-row  w-fit justify-center items-center hover:ring-4 hover:ring-gray-800 cursor-pointer shadow-lg p-4 transform transition duration-500 hover:scale-110" onclick="location.href='./business_tax_returns_presumptive.php';">
            <img src="./assets//img//icons//file_tax//business_tax_resumptive.png" class="h-12 w-fit pr-2"/>
            <a class="w-[15rem]">Business Tax Returns - Presumptive</a>
        </div>
        <div class="b-0 rounded-xl bg-emerald-200 font-semibold flex flex-row  w-fit justify-center items-center hover:ring-4 hover:ring-gray-800 cursor-pointer shadow-lg p-4 transform transition duration-500 hover:scale-110" onclick="location.href='./business_tax_returns.php';">
            <img src="./assets//img//icons//file_tax//business_tax_return.png" class="h-12 w-fit pr-2"/>
            <a class="w-[15rem]">Business Tax Returns</a>
        </div>
        <div class="b-0 rounded-xl bg-emerald-200 font-semibold flex flex-row  w-fit justify-center items-center hover:ring-4 hover:ring-gray-800 cursor-pointer shadow-lg p-4 transform transition duration-500 hover:scale-110" onclick="location.href='./advance_tax_calclulation.php';">
            <img src="./assets//img//icons//file_tax//advanced_tax.png" class="h-12 w-fit pr-2"/>
            <a class="w-[15rem]">Advance Tax calculation</a>
        </div>
        <div class="b-0 rounded-xl bg-emerald-200 font-semibold flex flex-row  w-fit justify-center items-center hover:ring-4 hover:ring-gray-800 cursor-pointer shadow-lg p-4 transform transition duration-500 hover:scale-110" onclick="location.href='./tds_returns.php';">
            <img src="./assets//img//icons//file_tax//tds_return.png" class="h-12 w-fit pr-2"/>
            <a  class="w-[15rem]">TDS Returns</a>
        </div>

     

     </div>

    </div>

    <?php include 'footer.php' ?>
    <script src="./assets/js/script.js"></script>
</body>
</html>
