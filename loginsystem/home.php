<?php
session_start();
if(empty($_SESSION['userdata']))
{
    header('LOCATION:index.html');
} else 
{   
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<?php
    echo '<h1>welcome to home page</h1>';
    echo '<a href="logout.php">logout</a>';   
    $posts = 
    [
        ['title' => 'Post One'  ,   'post' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil'],
        ['title' => 'Post two'  ,   'post' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil'],
        ['title' => 'Post three',   'post' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil'],
        ['title' => 'Post fout' ,   'post' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil'],
        ['title' => 'Post five' ,   'post' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil']
    ];
    echo "<div class='all'>";
    for($i = 0; $i <= count($posts) - 1;$i++)
    {
        $pst = $posts[$i];
        echo "<div class='posts'>";
            echo "<h1>" . $pst["title"] . "</h1>";
            echo '<div>';
                echo "<h3>" . $pst["post"] . '<a href="javascript:showMore()" id="link">Read More ...</a>' ."</h3>";
            echo '</div>';
        echo "</div>";
    }
    echo "</div>";
}
?>
    <script src="javascrpit.js"></script>

    </body>
</html>
