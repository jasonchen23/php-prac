<?php 
$john_score = 100;
$sam_score = 80;
?>

<?php if($john_score > $sam_score): ?>
    John is better
<?php elseif($john_score < $sam_score): ?>
    Sam is better
<?php else: ?>
    John and Sam are equal.
<?php endif; ?>
<h3>for</h3>
<?php for($i=0;$i<10;$i++): ?>
    h1
<?php endfor; ?>

<h3>continue</h3>
<?php
for($i=0; $i<10; $i++) {
    if($i===3){
        continue;
    }
    echo $i."<br>";
}
?>
<h3>break</h3>
<?php
for($i=0; $i<10; $i++) {
    if($i===4){
        break;
    }
    echo $i."<br>";
}
?>