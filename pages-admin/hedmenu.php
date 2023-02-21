
<h1 class="text-danger p-3">Hello  <?php echo $user['u_name']; ?>  </h1>
<div class=""> 
    <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">JS</h4>
    <ul class="collapse list-group list-group-horizontal" id="collapseExample1">
        <li class="list-group-item flex-fill">
            <a href="/projects/workshop/index.html" target="_blank"> <span>workshop</span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/russian_roulette start/index.html" target="_blank"> <span>Roulette</span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/Paru/index.html" target="_blank"> <span>Paru</span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/ComWork Nindja" target="_blank"> <span>KomWork 1</span></a>
        </li>
    </ul>

    <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">HTML</h4>
    <ul class="collapse list-group list-group-horizontal" id="collapseExample2">
        <li class="list-group-item flex-fill">
            <a href="/projects/" target="_blank"> <span></span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/KomWorkPogoda/index.html" target="_blank"> <span>KomWorkPogoda</span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/twit-blog-ok/inde1.php" target="_blank"> <span>Twit-blog</span></a>
        </li>
    </ul>

    <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">PHP</h4>
    <ul class="collapse list-group list-group-horizontal" id="collapseExample3">
        <li class="list-group-item flex-fill">
            <a href="/projects" target="_blank"> <span></span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects/kom-work3php/inde3.php" target="_blank"> <span>Kom-work 3 php</span></a>
        </li>
        <li class="list-group-item flex-fill">
            <a href="/projects" target="_blank"> <span></span></a>
        </li>
    </ul>

    <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">Links</h4>
    <ul class="collapse list-group list-group-horizontal" id="collapseExample4">
        <li class="list-group-item flex-fill">
            <a href="/projects" target="_blank"> <span></span></a>
        </li>
        
        <li class="list-group-item flex-fill">
            <a href="/projects" target="_blank"> <span></span></a>
        </li>

        <li class="list-group-item flex-fill" <?php if(!isset($_GET['p']) || $_GET['p'] == 'mylinks'): ?> <?php endif; ?> >
          <a href="/?p=mylinks.php"><i class='bx bx-code-alt'></i><span>Links</span></a>
        </li>
    </ul>
</div>

