<?php 
    // Change a template
    $this->Paginator->setTemplates([
        'first' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="{{text}}">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>',
        'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
        'last' => '<li class="page-item">
            <a class="page-link" href="{{url}}" aria-label="{{text}}">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">{{text}}</span>
            </a>
        </li>'
    ]);
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</nav>