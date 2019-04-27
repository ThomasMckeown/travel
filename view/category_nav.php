
<nav>
    <ul class="list-group">
        <!-- display links for all categories -->
        <?php foreach ($categories as $category) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a style="text-decoration: none; color: #00cc00;" href="?categoryID=<?php echo $category['category_ID']; ?>">
                   <?php echo $category['category_name']; ?>
                </a>   
<!--                <span class="badge badge-primary badge-pill">*</span>-->
            </li>
        <?php endforeach; ?>
    </ul>

 
</nav>

