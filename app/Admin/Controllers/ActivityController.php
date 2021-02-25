<?php

namespace App\Admin\Controllers;

use App\Models\Activity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActivityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Activity';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Activity());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'));
        $grid->column('user_roles', __('User roles'));
        $grid->column('intro', __('Intro'));
        $grid->column('details', __('Details'));
        $grid->column('start_at', __('Start at'));
        $grid->column('end_at', __('End at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('location', __('Location'));
        $grid->column('fee', __('Fee'));
        $grid->column('involves', __('Involves'));
        $grid->column('involves_min', __('Involves min'));
        $grid->column('involves_max', __('Involves max'));
        $grid->column('status', __('Status'));
        $grid->column('organizers', __('Organizers'));
        $grid->column('views', __('Views'));
        $grid->column('collectors_num', __('Collectors num'));
        $grid->column('is_stick', __('Is stick'));

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
        $show = new Show(Activity::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('user_roles', __('User roles'));
        $show->field('intro', __('Intro'));
        $show->field('details', __('Details'));
        $show->field('start_at', __('Start at'));
        $show->field('end_at', __('End at'));
        $show->field('created_at', __('Created at'));
        $show->field('location', __('Location'));
        $show->field('fee', __('Fee'));
        $show->field('involves', __('Involves'));
        $show->field('involves_min', __('Involves min'));
        $show->field('involves_max', __('Involves max'));
        $show->field('status', __('Status'));
        $show->field('organizers', __('Organizers'));
        $show->field('views', __('Views'));
        $show->field('collectors_num', __('Collectors num'));
        $show->field('is_stick', __('Is stick'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Activity());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->tinymce('intro', __('Intro'));
        $form->textarea('details', __('Details'));
        $form->datetime('start_at', __('Start at'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_at', __('End at'))->default(date('Y-m-d H:i:s'));
        $form->text('location', __('Location'));
        $form->decimal('fee', __('Fee'))->default(0.00);
        $form->number('involves', __('Involves'));
        $form->number('involves_min', __('Involves min'));
        $form->number('involves_max', __('Involves max'));
        $form->switch('status', __('Status'));
        $form->text('organizers', __('Organizers'));
        $form->number('views', __('Views'));
        $form->switch('is_stick', __('Is stick'));

        return $form;
    }
}
