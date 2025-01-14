<nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">
        <li class="nav-link flex-start flex-grow-1 border-1 ps-1 active" aria-current="page" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <a>4e554e4c.xyz<?php echo $currentPage;?></a>
            </li>
            <li class="li_styles">
                <button  id="langSwitcher" 
                <?php if ($language == 'en') { echo ' class="nav-link active"';} else { echo 'class="nav-link"';}?> aria-current="page" value="en" onclick="window.location = '<?php echo $_SERVER['PHP_SELF'] ?>?lang=en'">EN</button>
            </li>
            <li>
                <a class="nav-link active"> / </a>
            </li>
            <li class="li_styles">
                <button id="langSwitcher" <?php if ($language == 'lv') { echo ' class="nav-link active"';} else { echo 'class="nav-link"';}?> value="lv" onclick="window.location = '<?php echo $_SERVER['PHP_SELF'] ?>?lang=lv'">LV</button>
            </li>

        </ul>


        <!-- 1st layer nav (project categories) -->  
        <ul class="nav nav-tabs flex-column flex-md-row align-items-start collapse navbar-collapse" id="navbarNav" id="myTab" role="tablist" aria-orientation="vertical">
            <?php
              foreach ($project_groups as $row){
                if ($row["href"] == "yes") {
                  echo '<li class="nav-item text-start">',
                  '<a class="nav-link flex-md-fill';
                  if (substr($currentPage, 1) == $row["group_file_name"]) {
                    echo ' active';
                  };
                  echo '" href="/',
                  $row["group_file_name"],
                  '">[  ',
                  $row["group_name_$language"],
                  '  ]</a>',
                  '</li>';
                } else {
                  if ($row["group_id"] == "5") {
                    echo '<li class="nav-item text-start"><a class="nav-link" aria-selected="false" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">[ ',
                    $row["group_name_$language"],
                    ' ]</a></li>';
                  } else {
                    echo '<li class="nav-item text-start">',
                    '<a class="nav-link',
                    '" id="',
                    $row["group_reference"],
                    '-tab" data-bs-toggle="tab" data-bs-target="#',
                    $row["group_reference"],
                    '-tab-pane" type="button" role="tab" aria-controls="',
                    $row["group_reference"],
                    '-tab-pane"',
                    '>[  ',
                    $row["group_name_$language"],
                    '  ]</a>',
                    '</li>';
                  };
                        };
                      };
                    
            ?>
            
        </ul>
        
         <!-- 2nd layer nav (individual projects) -->
           <!-- art projects -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane" id="art-projects-tab-pane" role="tabpanel" aria-labelledby="art-projects-tab" tabindex="0">
     <ul class="nav nav-tabs flex-column flex-md-row align-items-start text-start navbar-collapse" id="navbarNav">
            <?php
              foreach ($menu_art_projects as $row){
                echo '<li class="nav-item text-start">',
                '<a class="nav-link" href="/',
                $row["project_file_name"],
                '">[  ',
                $row["title_$language"],
                '  ]</a>',
                '</li>';
                }
            ?>
        </ul>
    </div>
    <!-- documentary work -->
    <div class="tab-pane" id="documentary-work-tab-pane" role="tabpanel" aria-labelledby="documentary-work-tab" tabindex="0">
        <ul class="nav nav-tabs nav-fill flex-column flex-md-row align-items-start collapse navbar-collapse" id="navbarNav">
        <?php
              foreach ($menu_documentary_projects as $row){
                echo '<li class="nav-item text-start">',
                '<a class="nav-link" href="/',
                $row["project_file_name"],
                '">[  ',
                $row["title_$language"],
                "  ]</a>",
                '</li>';
                }
            ?>
        </ul>
    </div>  
    <!-- image making -->
    <div class="tab-pane" id="image-making-tab-pane" role="tabpanel" aria-labelledby="documentary-work-tab" tabindex="0">
        <ul class="nav nav-tabs nav-fill flex-column flex-md-row align-items-start collapse navbar-collapse" id="navbarNav">
        <?php
              foreach ($menu_image_making as $row){
                echo '<li class="nav-item text-start">',
                '<a class="nav-link" href="/',
                $row["group_file_name"],
                '">[  ',
                $row["title_$language"],
                "  ]</a>",
                '</li>';
                }
            ?>
        </ul>
    </div>  
    </div>
    </nav>
        <!-- contact modal -->
        <div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <h6 class="text-center"><?php echo $misc["0"]["element_$language"]; ?></h6>
            <div class="modal-body">
                <table class="table m-1">
                    <tbody>
                    <tr>
                        <td colspan="2"><?php echo $misc["1"]["element_$language"]; ?>:</td>
                    </tr>
                      <tr>
                        <td><?php echo $misc["2"]["element_$language"]; ?></td>
                        <td><a class="contact-link" href="">> belte.francis@gmail.com</a></td>
                      </tr>
                      <tr>
                        <td><?php echo $misc["3"]["element_$language"]; ?></td>
                        <td><a class="contact-link" href="">> @4e_55_4c_4c</a></td>
                      </tr>
                      <!-- <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="1">Collective works and contacts:</td>
                      </tr>
                      <tr>
                        <td colspan="1"><a class="contact-link" href="https://unitedfriedfront.xyz">> unitedfriedfront.xyz</a></td>
                      </tr> -->
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
              <a type="button" class="contact-close-btn" data-bs-dismiss="modal">[ <?php echo $misc["4"]["element_$language"]; ?> ]</a>
            </div>
          </div>
        </div>
      </div>
<!-- language switcher -->
