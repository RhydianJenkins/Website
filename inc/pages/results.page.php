<div class="container-fluid">

    <!-- Select -->
    <section id="select">
        <h1>Select a result to view</h1>
        <?php
            $years = array_diff(scandir(RESULTS_PATH), array('.', '..'));
            foreach($years as $year) {
                $allFiles = scandir(RESULTS_PATH.'/'.$year);
                $filteredFiles = array_diff($allFiles, array('.', '..'));
                $filteredFiles = array_values($filteredFiles);
                $results[$year] = $filteredFiles;
            }

            $results = array_reverse($results, true);
        ?>

        <select class="selectpicker" data-live-search="true" onchange="location = this.value;">
            <option value="" selected disabled>Please select</option>
            <?php foreach($results as $year => $files) : ?>
                <optgroup label="<?= $year; ?>">
                <?php foreach($files as $file) : ?>
                    <?php
						$fileName = ucwords(substr(str_replace('_', ' ', $file), 0, strrpos(str_replace('_', ' ', $file), ".")));
						$fileName = ltrim($fileName, '0123456789');
					?>
                    <option data-tokens="<?= $year; ?>" value="?page=results&year=<?= $year ?>&target=<?= $file ?>"><?= $fileName; ?></option>
                <?php endforeach ; ?>
            <?php endforeach ; ?>
        </select>
    </section>
    
    <!-- Table -->
    <section id="table">
        <?php
            $fileFound = false;
            if (!empty($_GET['year']) && file_exists(RESULTS_PATH . $_GET['year'])) {
                $results = array_values(array_reverse(array_diff(scandir(RESULTS_PATH . $_GET['year']), array('.', '..')), true));
                foreach($results as $result) {
                    if ($result == $_GET['target']) {
                        $filteredResultName = ucwords(substr(str_replace('_', ' ', $result), 0, strrpos(str_replace('_', ' ', $result), "."))); // make it look pretty
                        echo "<div style=\"text-align: center;\">";
						include(RESULTS_PATH . $_GET['year'] . '/' . $result);
						echo "</div>";
                        $fileFound = true;
                    }
                }
            }

            // display sailing instructions page if no results found
            if (!$fileFound) {
                include(PAGES_PATH . 'sailing_instructions.page.php');
            }
        ?>
    </section>

</div>

<!-- Add styles to the results -->
<script>
    $('h3').addClass('page-header');
    $('h3').css('margin-top', '50px');
	$('table').css('margin', '0 auto');
    $('table').addClass('table-striped table-hover table-responsive');
    $('tr').css('border', 'solid 1px');
    $('tr').css('padding-top', '10px');
    $('td').css('padding-bottom', '10px');
    $('td').css('padding-right', '10px');
</script>
