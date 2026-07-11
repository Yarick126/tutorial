        <span id="animals-count">Animals count: <?=$data[1]['COUNT(idanimals)'] == '' ? 0 : $data[1]['COUNT(idanimals)']?></span>
        <div id="animals-cards">
            <?php foreach($data[0] as $item):?>
                <article class="card">
                    <div class="animal"><?="Kind: " . $item[1]?></div>
                    <div class="name"><?="Name: " . $item[2]?></div>
                    <div class="age"><?="Age: " . $item[3]?></div>
                    <div class="sex"><?="Sex: " . $item[4]?></div>
                </article>
            <?php endforeach?>
        </div>