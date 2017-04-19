<div class="container">
        
        <?php
            $months = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
            $currentMonth = null;
            $currentDay = null;
            foreach ($birthdays as $birthday)
            {
                if($currentMonth == null || $currentMonth != $birthday['month']) {
        ?>
                    <h1><?= $months[$birthday['month'] - 1]; ?></h1>
        <?php
                    $currentMonth = $birthday['month'];
                }

                if($currentDay == null || $currentDay != $birthday['day']) {
        ?>
                    <h2><?= $birthday['day']; ?></h2>
        <?php
                    $currentDay = $birthday['day'];
                }
        ?>
        <p>
            <span><?= $birthday['person']; ?></span>
            <span>(<?= $birthday['year']; ?>)</span>
        </p>
        <?php } ?>

    
    <p><a href="<?= URL ?>birthday/create">Toevoegen</a></p>
</div>