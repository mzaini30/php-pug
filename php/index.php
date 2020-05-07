
<h1>Bagian nama</h1><?php if($nama != "Zen"): ?>
<p>Namanya bukan Zen</p><?php else if($nama != "Andi"): ?>
<p>Namanya bukan Andi</p><?php else: ?>
<p>Halo <?= htmlentities($nama ?? '') ?></p><?php endif ?>
<h1>Buah-buah yang kubutuhkan adalah:</h1>
<ol><?php foreach($data as $x): ?>
  <li><?= htmlentities($x ?? '') ?></li><?php endforeach ?>
</ol>