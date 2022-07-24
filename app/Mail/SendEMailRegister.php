<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Config;

class SendEMailRegister extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $name;
    private $student_id;


    public function __construct($name,$student_id)
    {
        //
        $this->name = $name;
        $this->student_id = $student_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $admin_email =Config::get('app.admin_address');
        $manager_email =Config::get('app.manager_address');

        $emails = [$admin_email,$manager_email];

        return $this->subject('Welcome to WebAPI-DEV!')->view('pages.registerMail')
        ->bcc($emails)
        ->with([
            'name' => $this->name,
            'student_id' => $this->student_id
        ]);


        /**
         * return $this->subject("ขอต้อนรับเข้าสู่การเป็นสมาชิกสมาคมศิษย์เก่าคณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร ")
         *   ->bcc($emails)
         *   ->attach(public_path('/uploads/evidence/register').'/'.$filename, [
         *       'as' => $filename,
         *       'mime' => 'application/pdf',
         *   ])
         *   ->view('pages.email.sendRegisterMail')->with(compact('user',$this->user))
         *   ->with(compact('label_member_type',$this->label_member_type))
         *   ->with(compact('major_label',$this->major_label))
         *   ->with(compact('password',$this->password))
         *   ;
         * 
         */

        //return $this->view('view.name');
    }
}
