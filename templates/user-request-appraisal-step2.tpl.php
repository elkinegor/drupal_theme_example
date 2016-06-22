<?php $localityPostcode = htmlspecialchars($_REQUEST["post-code"]); ?>

<div id="appraisal_form">
  <div id="title_and_tabs_wrapper">
    <div id="title_and_tabs">
      <h2>Request an Appraisal</h2>
      <div id="steps">
        <div class="step step1 first">
          <p>Step 1</p>
          <h2>Create Property</h2>
        </div>
        <div class="step step2 last active">
          <p>Step 2</p>
          <h2>Select Agents</h2>
        </div>
      </div>
    </div>
  </div>
  <div id="content-wrapper-wrapper">
    <div id="content-wrapper">
      <div id="node_create_form">
        <div id="agents_list">
          <p class="description">We have found <span class="agent-count">some</span> suggested agents for this property appraisal request based on the postcode <?php if (isset($localityPostcode)){echo $localityPostcode;} ?></p>
          <a id="send_all">Send to all</a>
          <h3>Or refine your selection below</h3>
<!--
          <ul>
            <li>
              <div class="img"><img src="/sites/all/themes/appraisal/images/user.png" /></div>
              <div class="desc"><p class="name">Agent Smith</p><p class="line2">Ferntree Gully, residential</p></div>
              <div class="actions">
                <div class="select"><p>Selected</p></div>
                <div class="del"><p>Remove</p></div>
              </div>
            </li>
            <li>
              <div class="img"><img src="/sites/all/themes/appraisal/images/user.png" /></div>
              <div class="desc"><p class="name">Agent Smith</p><p class="line2">Ferntree Gully, residential</p></div>
              <div class="actions">
                <div class="select"><p>Selected</p></div>
                <div class="del"><p>Remove</p></div>
              </div>
            </li>
            <li>
              <div class="img"><img src="/sites/all/themes/appraisal/images/user.png" /></div>
              <div class="desc"><p class="name">Agent Smith</p><p class="line2">Ferntree Gully, residential</p></div>
              <div class="actions">
                <div class="select"><p>Selected</p></div>
                <div class="del"><p>Remove</p></div>
              </div>
            </li>
          </ul>
-->
        </div>
        <?php  echo drupal_render_children($form); ?>
      </div>
      <div id="right-sidebar">
        
      </div>
    </div>
  </div>
</div>  