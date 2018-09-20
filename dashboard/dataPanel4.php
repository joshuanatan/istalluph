<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-5">
                    <div class="icon-big icon-info text-center">
                        <i class="ti-wallet"></i>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="numbers">
                        <p>Deposited Money</p>
                        <?php if(empty($_SESSION["id"])) echo " - "; else echo "Nanti ada report"; ?>
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr />
            </div>
        </div>
    </div>
</div>