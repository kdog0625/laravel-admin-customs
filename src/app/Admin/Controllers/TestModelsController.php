<?php

namespace App\Admin\Controllers;

use App\Models\TestMovies;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TestModelsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TestMovies';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TestMovies());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('order_column', __('Order column'));
        $grid->column('describe', __('Describe'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(TestMovies::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('order_column', __('Order column'));
        $show->field('describe', __('Describe'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new TestMovies());

        $form->text('title', __('Title'));
        $form->number('order_column', __('Order column'));
        $form->text('describe', __('Describe'));

        return $form;
    }
}
