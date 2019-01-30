<?php 

get_header();

function greet($name, $color) {
    echo "<p>Hello, my name is $name, and my favorite color is $color</p>";
}

greet("John", "blue");
greet("Jane", "red");
greet("Bay", "yellow");

$names = array("Katniss", "Sammy", "Ringo", "Percy");
echo "My cats are ";

for($i = 0; $i < count($names) ; $i++){
    echo "$names[$i], ";
}

while(have_posts()){
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
<?php }

?>
<!-- Wordpress functions -->
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php get_footer(); ?>