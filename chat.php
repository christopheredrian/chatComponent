<div ng-controller="ChatController as chatCtrl">
    {{chatCtrl.test}}
    <div class="row">
        <div class="col-md-6">
            <h1>Room <?php echo $params['room'] ?></h1></div>
        <div class="col-md-6">
            <h2 class="pull-right">Logged In as: <?php echo $params['name'] ?></h2>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-3 ">
            <div>Richard</div>
            <div>Tiara</div>
            <div>Renita</div>
            <div>Olu</div>
            <div>Ada</div>
        </div>
        <div class="col-md-8 col-md-offset-1  -lg" ng-controller="chatCtrl">
            <div class="row " style="border: 0px">
                <textarea rows="10" class="form-control" editable="false"></textarea>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <input class="form-control" type="text" name="textBox" />
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
        
    
</div>