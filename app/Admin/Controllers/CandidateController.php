<?php

namespace App\Admin\Controllers;

use App\Models\Candidate;
use App\Models\Location;
use App\Models\Utils;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CandidateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Candidates';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Candidate());
        $grid->disableCreation();

        $grid->column('avatar', __('Photo'))
            ->display(function ($avatar) {
                $img = url("storage/" . $avatar);
                $link = admin_url('members/' . $this->id);
                return '<a href=' . $link . ' title="View profile"><img class="img-fluid " style="border-radius: 10px;"  src="' . $img . '" ></a>';
            })
            ->width(80)
            ->sortable();
        $grid->column('id', __('ID'))->sortable();
        $grid->column('created_at', __('Registered'))->sortable();
        $grid->column('name', __('Name'))->sortable();
        $grid->column('first_name', __('First name'))->hide();
        $grid->column('middle_name', __('Middle name'))->hide();
        $grid->column('sex', __('Sex'))->sortable();
        $grid->column('last_name', __('Last name'))->hide();
        $grid->column('dob', __('D.O.B'))->display(function ($x) {
            return Utils::my_date_1($x);
        })->sortable();
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));
        $grid->column('district_id', __('District id'));
        $grid->column('subcounty_id', __('Subcounty id'));
        $grid->column('village', __('Village'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number_2', __('Phone number 2'));
        $grid->column('weight', __('Weight'));
        $grid->column('height', __('Height'));
        $grid->column('religion', __('Religion'));
        $grid->column('agent', __('Agent'));
        $grid->column('nin', __('Nin'));
        $grid->column('has_passport', __('Has passport'));
        $grid->column('passport_number', __('Passport number'));
        $grid->column('passport_issue_date', __('Passport issue date'));
        $grid->column('passport_expiry', __('Passport expiry'));
        $grid->column('photo', __('Photo'));
        $grid->column('education_level', __('Education level'));
        $grid->column('skills', __('Skills'));
        $grid->column('parent_farther_name', __('Parent farther name'));
        $grid->column('parent_farther_contact', __('Parent farther contact'));
        $grid->column('parent_farther_address', __('Parent farther address'));
        $grid->column('parent_mother_name', __('Parent mother name'));
        $grid->column('parent_mother_contact', __('Parent mother contact'));
        $grid->column('parent_mother_address', __('Parent mother address'));
        $grid->column('next_of_kin_releationship', __('Next of kin releationship'));
        $grid->column('next_of_kin_name', __('Next of kin name'));
        $grid->column('next_of_kin_contact', __('Next of kin contact'));
        $grid->column('next_of_kin_address', __('Next of kin address'));
        $grid->column('passport_copy', __('Passport copy'));
        $grid->column('full_photo', __('Full photo'));
        $grid->column('stage', __('Stage'));
        $grid->column('destination_country', __('Destination country'));
        $grid->column('job_type', __('Job type'));
        $grid->column('registration_fee', __('Registration fee'));
        $grid->column('has_paid', __('Has paid'));
        $grid->column('account', __('Account'));
        $grid->column('medical_hospital', __('Medical hospital'));
        $grid->column('medical_date', __('Medical date'));
        $grid->column('medical_status', __('Medical status'));
        $grid->column('musaned_status', __('Musaned status'));
        $grid->column('failed_reason', __('Failed reason'));
        $grid->column('interpal_appointment_date', __('Interpal appointment date'));
        $grid->column('interpal_done', __('Interpal done'));
        $grid->column('interpal_status', __('Interpal status'));
        $grid->column('cv_sharing', __('Cv sharing'));
        $grid->column('cv_shared_with_partners', __('Cv shared with partners'));
        $grid->column('emis_upload', __('Emis upload'));
        $grid->column('on_training', __('On training'));
        $grid->column('training_start_date', __('Training start date'));
        $grid->column('training_end_date', __('Training end date'));
        $grid->column('ministry_aproval', __('Ministry aproval'));
        $grid->column('enjaz_applied', __('Enjaz applied'));
        $grid->column('enjaz_status', __('Enjaz status'));
        $grid->column('embasy_submited', __('Embasy submited'));
        $grid->column('embasy_date_submited', __('Embasy date submited'));
        $grid->column('embasy_status', __('Embasy status'));
        $grid->column('depature_status', __('Depature status'));
        $grid->column('depature_date', __('Depature date'));
        $grid->column('depature_comment', __('Depature comment'));

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
        $show = new Show(Candidate::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('name', __('Name'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
        $show->field('sex', __('Sex'));
        $show->field('last_name', __('Last name'));
        $show->field('dob', __('Dob'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('district_id', __('District id'));
        $show->field('subcounty_id', __('Subcounty id'));
        $show->field('village', __('Village'));
        $show->field('address', __('Address'));
        $show->field('phone_number_2', __('Phone number 2'));
        $show->field('weight', __('Weight'));
        $show->field('height', __('Height'));
        $show->field('religion', __('Religion'));
        $show->field('agent', __('Agent'));
        $show->field('nin', __('Nin'));
        $show->field('has_passport', __('Has passport'));
        $show->field('passport_number', __('Passport number'));
        $show->field('passport_issue_date', __('Passport issue date'));
        $show->field('passport_expiry', __('Passport expiry'));
        $show->field('photo', __('Photo'));
        $show->field('education_level', __('Education level'));
        $show->field('skills', __('Skills'));
        $show->field('parent_farther_name', __('Parent farther name'));
        $show->field('parent_farther_contact', __('Parent farther contact'));
        $show->field('parent_farther_address', __('Parent farther address'));
        $show->field('parent_mother_name', __('Parent mother name'));
        $show->field('parent_mother_contact', __('Parent mother contact'));
        $show->field('parent_mother_address', __('Parent mother address'));
        $show->field('next_of_kin_releationship', __('Next of kin releationship'));
        $show->field('next_of_kin_name', __('Next of kin name'));
        $show->field('next_of_kin_contact', __('Next of kin contact'));
        $show->field('next_of_kin_address', __('Next of kin address'));
        $show->field('passport_copy', __('Passport copy'));
        $show->field('full_photo', __('Full photo'));
        $show->field('stage', __('Stage'));
        $show->field('destination_country', __('Destination country'));
        $show->field('job_type', __('Job type'));
        $show->field('registration_fee', __('Registration fee'));
        $show->field('has_paid', __('Has paid'));
        $show->field('account', __('Account'));
        $show->field('medical_hospital', __('Medical hospital'));
        $show->field('medical_date', __('Medical date'));
        $show->field('medical_status', __('Medical status'));
        $show->field('musaned_status', __('Musaned status'));
        $show->field('failed_reason', __('Failed reason'));
        $show->field('interpal_appointment_date', __('Interpal appointment date'));
        $show->field('interpal_done', __('Interpal done'));
        $show->field('interpal_status', __('Interpal status'));
        $show->field('cv_sharing', __('Cv sharing'));
        $show->field('cv_shared_with_partners', __('Cv shared with partners'));
        $show->field('emis_upload', __('Emis upload'));
        $show->field('on_training', __('On training'));
        $show->field('training_start_date', __('Training start date'));
        $show->field('training_end_date', __('Training end date'));
        $show->field('ministry_aproval', __('Ministry aproval'));
        $show->field('enjaz_applied', __('Enjaz applied'));
        $show->field('enjaz_status', __('Enjaz status'));
        $show->field('embasy_submited', __('Embasy submited'));
        $show->field('embasy_date_submited', __('Embasy date submited'));
        $show->field('embasy_status', __('Embasy status'));
        $show->field('depature_status', __('Depature status'));
        $show->field('depature_date', __('Depature date'));
        $show->field('depature_comment', __('Depature comment'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Candidate());

        $form->image('photo', __('Candidate\'s passport size Photo'))->rules('required');
        $form->image('full_photo', __('Candidate\'s Full photo'));
        $form->text('first_name', __('First name'))->rules('required');
        $form->text('middle_name', __('Middle name'));
        $form->text('last_name', __('Last name'))->rules('required');
        $form->radio('sex', __('Sex'))
            ->options([
                'Male' => 'Male',
                'Female' => 'Female',
            ])
            ->rules('required');
        $form->date('dob', __('Date of birth'))->rules(
            'required'
        );

        $form->decimal('weight', __('Weight'))->rules('required');
        $form->decimal('height', __('Height'))->rules('required');

        $form->text('phone_number', __('Phone number'))->rules('required');
        $form->text('phone_number_2', __('Phone number 2'));
        $form->email('email', __('Email Address'));

        $form->select('subcounty_id', __('Subcounty'))
            ->rules('required')
            ->options(Location::get_sub_counties_array())->rules('required');
        $form->text('village', __('Village'));
        $form->text('address', __('Home Address'))->rules('required');

        $form->select('religion', __('Religion'))
            ->options([
                'Muslem' => 'Muslem',
                'Christian' => 'Christian',
                'Other' => 'Other',
            ])->rules('required');

        $form->text('nin', __('National ID Number'))->rules('required');
        $form->text('agent', __('Agent Name'));

        $form->divider();

        $form->radio('has_passport', __('Does this candidate have passport?'))
            ->options([
                'Yes' => 'Yes',
                'No' => 'No',
            ])->when('Yes', function ($form) {
                $form->text('passport_number', __('Passport number'))->rules('required');
                $form->date('passport_issue_date', __('Passport issue date'))->rules('required');
                $form->date('passport_expiry', __('Passport expiry date'))->rules('required');
                $form->image('passport_copy', __('Passport copy photo'))->rules('required');
            })
            ->rules('required');

        $form->select('education_level', __('Education level'))
            ->options([
                'None' => 'None - (Not educated at all)',
                'Below primary' => 'Below primary - (Did not complete P.7)',
                'Primary' => 'Primary - (Completed P.7)',
                'Secondary' => 'Secondary - (Completed S.4)',
                'A-Level' => 'Advanced level - (Completed S.6)',
                'Bachelor' => 'Bachelor - (Degree)',
                'Masters' => 'Masters',
                'PhD' => 'PhD',
            ])->rules('required');

        $form->tags('skills', __('Skills'))->options([
            'Cooking' => 'Cooking',
            'Driving' => 'Driving',
        ])->rules('required');

        $form->text('parent_farther_name', __("Father's name"));
        $form->text('parent_farther_contact', __("Father's name"));
        $form->text('parent_farther_address', __("Father's address"));
        $form->text('parent_mother_name', __("Mother's name"));
        $form->text('parent_mother_contact', __("Mother's contact"));
        $form->text('parent_mother_address', __("Mother's address"));

        $form->text('next_of_kin_releationship', __('Next of kin releationship'))->rules('required');
        $form->text('next_of_kin_name', __('Next of kin name'))->rules('required');
        $form->text('next_of_kin_contact', __('Next of kin contact'))->rules('required');
        $form->text('next_of_kin_address', __('Next of kin address'))->rules('required');


        $form->divider();
        $form->text('stage', __('Stage'))->readonly()->default('Medication')->rules('required');
        $form->select('destination_country', __('Destination country'))->options([
            'Saudi Arabia' => 'Saudi Arabia',
            'Dubai' => 'Dubai',
        ])->rules(
            'required'
        );

        $form->text('job_type', __('Job interested in'))
            ->options([
                'Driving' => 'Driving',
            ])->rules(
                'required'
            );

        $form->radio('has_paid', __('Has paid Registration fee?'))
            ->options([
                'Yes' => 'Yes',
                'No' => 'No',
            ])->when('Yes', function ($form) {
                $form->decimal('registration_fee', __('Registration fee'))->rules('required');
                $form->select('account', __('Paid to Account'))->options([
                    'Bank account' => 'Bank account',
                    'Cash account' => 'Cash account',
                ])->rules(
                    'required'
                );
            })
            ->rules('required');


        /*         $form->text('medical_hospital', __('Medical hospital'));
        $form->text('medical_date', __('Medical date'));
        $form->text('medical_status', __('Medical status'));
        $form->text('musaned_status', __('Musaned status'));
        $form->text('failed_reason', __('Failed reason'));
        $form->text('interpal_appointment_date', __('Interpal appointment date'));
        $form->text('interpal_done', __('Interpal done'));
        $form->text('interpal_status', __('Interpal status'));
        $form->text('cv_sharing', __('Cv sharing'));
        $form->text('cv_shared_with_partners', __('Cv shared with partners'));
        $form->text('emis_upload', __('Emis upload'));
        $form->text('on_training', __('On training'));
        $form->text('training_start_date', __('Training start date'));
        $form->text('training_end_date', __('Training end date'));
        $form->text('ministry_aproval', __('Ministry aproval'));
        $form->text('enjaz_applied', __('Enjaz applied'));
        $form->text('enjaz_status', __('Enjaz status'));
        $form->text('embasy_submited', __('Embasy submited'));
        $form->text('embasy_date_submited', __('Embasy date submited'));
        $form->text('embasy_status', __('Embasy status'));
        $form->text('depature_status', __('Depature status'));
        $form->text('depature_date', __('Depature date'));
        $form->text('depature_comment', __('Depature comment')); */

        return $form;
    }
}
