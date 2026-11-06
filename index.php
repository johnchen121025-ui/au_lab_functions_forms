<?php
$labs = [
    "ផ្នែក A : Functions (មេរៀនទី ៣)" => [
        "ex01_void_functions.php"      => "១. Void Functions (មាន/គ្មាន Parameter)",
        "ex02_return_functions.php"    => "២. Return Value Functions (ពិន្ទុ & និទ្ទេស)",
        "ex03_php8_features.php"       => "៣. Strict Types, Default Params & Arrow Fn",
        "ex04_arrays_builtin.php"      => "៤. Arrays & Built-in Functions (កន្ត្រកទំនិញ)",
        "modular/index.php"            => "៥. Modular Code (include / require)",
    ],
    "ផ្នែក B : Form (មេរៀនទី ៤)" => [
        "ex06_get_search.php"          => "៦. GET Search Form",
        "ex07_post_login.php"          => "៧. POST Login & Request Detection",
        "ex08_validation.php"          => "៨. Server-Side Validation",
        "ex09_sticky_controls.php"     => "៩. Sticky Radio/Select/Checkbox/Textarea",
        "ex10_xss_defense.php"         => "១០. XSS Defense & Sanitization",
        "ex11_prg_pattern.php"         => "១១. PRG Pattern",
        "ex12_full_registration.php"   => "១២. Capstone: ចុះឈ្មោះនិស្សិត",
    ],
];
?>
<!DOCTYPE html>
<html lang="km"><head><meta charset="UTF-8"><title>AU Lab - Functions & Forms</title>
<link rel="stylesheet" href="style.css"></head>
<body><div class="box">
<h1>លំហាត់ Functions & Form (១២ លំហាត់)</h1>
<?php foreach ($labs as $group => $items): ?>
    <h3><?= htmlspecialchars($group) ?></h3>
    <ul>
    <?php foreach ($items as $file => $title): ?>
        <li><a href="<?= htmlspecialchars($file) ?>"><?= htmlspecialchars($title) ?></a></li>
    <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</div></body></html>
