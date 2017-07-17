<div class="content-wrapper">
    <h1>Dashboard</h1>
    <br/>


    <div class="row">

        <!-- Formulaire -->
        <div class="col-md-6">
            <div class="dashboard" style="min-height: 100%;">
                <br/>
                <div class="form-group">
                    <label> Comptes </label>
                    <select class="form-control pmd-select2" name="account" id="account">
                        <option value="all" selected> Tous </option>
                        <option value="{{accounts['Normal'].AccountId}}"> Titres - FR7615868000012640002757049 </option>
                        {#<option value="{{accounts['PEA'].AccountId}}">    PEA   - FR7615868000011035440000028  </option>#}
                    </select>
                </div>
            </div>
        </div>


</div> <!-- .content-wrapper -->

<?php
var_dump($_SESSION);
?>