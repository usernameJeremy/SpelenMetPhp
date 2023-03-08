<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <header>

    </header>
    <body>

    <?php

    use src\CSV\CSVReader;

    require_once('App/Application.php');
    require_once('CSV/CSVWriter.php');
    require_once('CSV/CSVReader.php');
    require_once('Service/Calculators/DateCalculator.php');
    require_once('Models/Subscription.php');
    require_once('Service/SubscriptionManager.php');


    $csvReader = new CSVReader('MockData/MOCK_DATA.csv');
    $csvData = $csvReader->readSubscriptions();

//sorteert op termijn
    usort($csvData, function($a, $b) {
        return strtotime($b->getExpirationDate()) - strtotime($a->getExpirationDate());
    });


    echo "<table>";
    echo "<tr><th>Subscription number</th><th> Name </th><th>Term</th><th>Expiration Date</th></tr>";

    foreach ($csvData as $subscription) {
        echo "<tr>";
        echo "<td>" . $subscription->getSubscriptionNumber() . "</td>";
        echo "<td>" . $subscription->getName() . "</td>";
        echo "<td>" . $subscription->getExpirationDate() . "</td>";
        echo "<td>" . $subscription->getTerm() . "</td>";
        echo "</tr>";
    }

    echo "</table>";


    ?>

<script></script>
    </body>
<footer>

</footer>
</html>