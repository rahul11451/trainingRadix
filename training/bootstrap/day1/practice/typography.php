<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row vh-lg-100">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4">
            <div>
                <div>
                    <p class="h1">Heading</p>
                    <p class="h2">h1</p>
                    <p class="h3">h3</p>
                </div>
                <div>
                    Nensi <small class="text-muted">Darji</small>
                </div>
                <div>
                    <p class="text-lowercase">NENSI</p>
                    <p class="text-uppercase">nensi</p>
                    <p class="text-capitalize">Nensi</p>
                </div>
                <div>
                    <h1 class="display-1">Display Heading 1</h1>
                    <h2 class="display-2">Display Heading 2</h2>
                </div>
                <div>
                    <p class="lead">
                        Lead pragraph.
                    </p>
                </div>
                <p>inline text</p>
                <p><mark>highlight</mark> text.</p>
                <p>delete ele.<del>deleted text.</del></p>
                <p>insert text<ins> addition </ins></p>
                <p><em>italicized text.</em></p>
            </div>
            <div>
                <p><abbr title="attribute">attr</abbr></p>
                <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
            </div>
            <div>
                <p>blockquote</p>
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <p>Naming source</p>
                <figure>
                    <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
            </div>
            <div>
                <p>unstyled list</p>
                <ul class="list-unstyled">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
                <p>inline list</p>
                <ul class="list-inline">
                    <li class="list-inline-item">1</li>
                    <li class="list-inline-item">2</li>
                    <li class="list-inline-item">3</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include("../../../footer.php");
?>