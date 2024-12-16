

<nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">
        <li class="nav-link flex-start flex-grow-1 border-1 ps-1 active" aria-current="page" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <a>4e554e4c.xyz<?php
                echo $currentPage;  
                
                ?></a>
            </li>
            <!-- <select class="nav-link flex-fill border-0 active" id="langSwitcher">
                <option class="nav-link border-0 p-0" value="en">EN</option>
                <option class="nav-link border-0 p-0" value="lv">LV</option>
            </select> -->


            <li id="langSwitcher">
                <button type="button" id="langSwitcher" class="nav-link border-0 p-0" aria-current="page" value="en">
            </li>
            <li>
                <a class="nav-link border-0 p-0"> / </a>
            </li>
            <li id="langSwitcher">
                <button type="button" id="langSwitcher" class="nav-link border-0 active" value="lv">
            </li>

        </ul>


        <!-- 1st layer nav (project categories) -->  
        <ul class="nav nav-tabs flex-column flex-md-row align-items-start collapse navbar-collapse" id="navbarNav" id="myTab" role="tablist" aria-orientation="vertical">
            <?php
              foreach ($project_groups as $row){
                if ($row["href"] == "yes") {
                  echo '<li class="nav-item text-start">';
                  echo '<a class="nav-link flex-md-fill';
                  if (substr($currentPage, 1) == $row["group_file_name"]) {
                    echo ' active';
                  };
                  echo '" href="/';
                    echo $row["group_file_name"];
                  echo '">[  ';
                    echo $row["group_name_$language"];
                  echo "  ]</a>";
                  echo '</li>';
                } else {
                  if ($row["group_id"] == "5") {
                    echo '<li class="nav-item text-start"><a class="nav-link" aria-selected="false" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">[ ';
                     echo $row["group_name_$language"];
                     echo ' ]</a></li>';
                  } else {
                    echo '<li class="nav-item text-start">';
                    echo '<a class="nav-link';
                    // if (basename(getcwd()) == $row["group_name_en"]) {
                    //   echo ' active';
                    // } else {
                    //   echo '';
                    // };
                    echo '" id="';
                      echo $row["group_reference"];
                    echo '-tab" data-bs-toggle="tab" data-bs-target="#';
                      echo $row["group_reference"];
                    echo '-tab-pane" type="button" role="tab" aria-controls="';
                      echo $row["group_reference"];
                    echo '-tab-pane"';
                    echo '>[  ';
                        echo $row["group_name_$language"];
                    echo "  ]</a>";
                    echo '</li>';
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
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link" href="/';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul>
    </div>
    <!-- documentary work -->
    <div class="tab-pane" id="documentary-work-tab-pane" role="tabpanel" aria-labelledby="documentary-work-tab" tabindex="0">
        <ul class="nav nav-tabs nav-fill flex-column flex-md-row align-items-start collapse navbar-collapse" id="navbarNav">
        <?php
              foreach ($menu_documentary_projects as $row){
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link" href="/';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul>
    </div>  
    </div>
    </nav>
        <!-- contact modal -->
        <div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-black border-end border-bottom border-2">
            <h6 class="text-center">*** CONTACT ***</h6>
            <div class="modal-body">
                <table class="table m-1">
                    <tbody>
                    <tr>
                        <td colspan="2">Contact me here sample text idk:</td>
                    </tr>
                      <tr>
                        <td>e-mail</td>
                        <td><a class="link-dark" href="">> belte.francis@gmail.com</a></td>
                      </tr>
                      <tr>
                        <td>insta</td>
                        <td><a class="link-dark" href="">> @4e_55_4c_4c</a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="1">Collective works and contacts:</td>
                      </tr>
                      <tr>
                        <td colspan="1"><a class="text-dark" href="">> unitedfriedfront.xyz</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
              <a type="button" class="text-dark" data-bs-dismiss="modal">[ close ]</a>
            </div>
          </div>
        </div>
      </div>
<!-- language switcher -->
