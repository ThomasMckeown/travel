
        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?categoryID=<?php 
                              echo $category['category_ID']; ?>">
                        <?php echo $category['category_name']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>

