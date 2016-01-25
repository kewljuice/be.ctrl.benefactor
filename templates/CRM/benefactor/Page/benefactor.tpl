{* Display a variable directly *}
<div>

    <!-- content -->
    <h3>Benefactor ({$url})</h3>
    {$content}
    <hr>

    <!-- literal -->
    {literal} no smarty code {hello} {/literal}


    <!-- apply our angular app -->
    <div class="container" ng-app="validationApp">

        [[ name ]]

        <!-- views will be injected here -->
        <div ui-view></div>

    </div>

</div>