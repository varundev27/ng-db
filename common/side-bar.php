<div class="side-bar open" ng-controller="navCtrl">
    <ul class="side-nav list scrollbar" id="style-4">
        <li class="user-profile" ng-repeat="x in userInfo">
            <img src="{{x.userImg}}" class="icon-img icon-img-sm radius-50 img-responsive">
            <h4 class="title">{{x.name}}<small class="block">{{x.role}}</small></h4>
        </li>
        <li class="" ng-repeat="x in menu">
            <span class="icon {{x.ddicon}}"></span>
            <a href="{{x.url}}" class="captialize" data-toggle="collapse" data-target="#{{x.tgt}}">
                <span class="icon"><i class="fa {{x.faicon}}"></i></span>{{x.text}}
            </a>
            <ul id="{{x.tgt}}" ng-if="x.submenu" class="collapse sub-menu">
                <li ng-repeat="x in x.submenu">
                    <a href="{{x.url}}" class="captialize">{{x.text}}</a>
                </li>
            </ul>
        </li>
    </ul>
</div>