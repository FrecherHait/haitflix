<?php

namespace App\Admin\Controllers;

use App\Models\MovieList;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MovieListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MovieList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MovieList());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('type_id', __('Type id'));
        $grid->column('title', __('Title'));
        $grid->column('orig_name', __('Orig name'));
        $grid->column('slug', __('Slug'));
        $grid->column('bg_img', __('Bg_img'));
        $grid->column('img', __('Img'));
        $grid->column('year', __('Year'));
        $grid->column('country', __('Country'));
        $grid->column('cnt_series', __('Cnt series'));
        $grid->column('actors', __('Actors'));
        $grid->column('description', __('Description'));
        $grid->column('link', __('Link'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(MovieList::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('type_id', __('Type id'));
        $show->field('title', __('Title'));
        $show->field('orig_name', __('Orig name'));
        $show->field('slug', __('Slug'));
        $show-field('bg_img', __('Bg_img'));
        $show->field('img', __('Img'));
        $show->field('year', __('Year'));
        $show->field('country', __('Country'));
        $show->field('cnt_series', __('Cnt series'));
        $show->field('actors', __('Actors'));
        $show->field('description', __('Description'));
        $show->field('link', __('Link'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MovieList());

        $form->number('category_id', __('Category id'));
        $form->number('type_id', __('Type id'));
        $form->text('title', __('Title'));
        $form->text('orig_name', __('Orig name'));
        $form->text('slug', __('Slug'));
        $form->textarea('bg_img', __('Bg_img'));
        $form->textarea('img', __('Img'));
        $form->date('year', __('Year'))->default(date('Y-m-d'));
        $form->text('country', __('Country'));
        $form->number('cnt_series', __('Cnt series'));
        $form->textarea('actors', __('Actors'));
        $form->textarea('description', __('Description'));
        $form->text('link', __('Link'));

        return $form;
    }
}
