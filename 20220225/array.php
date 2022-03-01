<?php
$c = array(
    "John" => array("John", 1),
    "Sam" => array("Sam", 2)
);
$d = array(
    "John" => array("John", 3),
    "Mary" => array("Mary", 4)
);
$e = $c + $d;
// echo $e;
?>
<?php
$student=[
    "name"=>"john",
    "height"=>173,
    "weight"=>65,
];
echo json_encode($student);
?>
<h2></h2>
<script>
    let student=<?=json_encode($student)?>;
    console.log(student);
    let h= document.querySelector("h2");
    h.innerText=student.name;
</script>