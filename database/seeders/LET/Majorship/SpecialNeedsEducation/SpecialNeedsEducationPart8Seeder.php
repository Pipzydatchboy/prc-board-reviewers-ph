<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // 141
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Family-centered practice in special education primarily emphasizes:',
           'choices'      => json_encode([
               'Collaborating with families as partners',
               'Making decisions without parent input',
               'Focusing solely on academic outcomes',
               'Excluding families from meetings'
           ]),
           'answer'       => 'Collaborating with families as partners',
           'explanation'  => 'Family-centered practice involves working jointly with families to support the child’s needs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 142
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Collaborative multidisciplinary teams in SNEd typically include all EXCEPT:',
           'choices'      => json_encode([
               'General education teacher',
               'Special education teacher',
               'Medical specialist',
               'Local school board member'
           ]),
           'answer'       => 'Local school board member',
           'explanation'  => 'Teams include educators, related service providers, and families, but not board members.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 143
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Maintaining confidentiality of student records is required by which Philippine law?',
           'choices'      => json_encode([
               'RA 10175',
               'RA 7277',
               'RA 7610',
               'RA 9442'
           ]),
           'answer'       => 'RA 10175',
           'explanation'  => 'The Data Privacy Act (RA 10175) mandates protection of personal information.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 144
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Ethical practice in SNEd includes all EXCEPT:',
           'choices'      => json_encode([
               'Upholding confidentiality',
               'Involving families in decisions',
               'Accepting gifts that influence decisions',
               'Advocating for the child’s needs'
           ]),
           'answer'       => 'Accepting gifts that influence decisions',
           'explanation'  => 'Ethical guidelines prohibit accepting gifts that could bias professional judgment.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 145
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Community partnerships in SNEd enhance services by:',
           'choices'      => json_encode([
               'Linking with agencies for therapy and support',
               'Isolating services within the school only',
               'Reducing family involvement',
               'Standardizing testing only'
           ]),
           'answer'       => 'Linking with agencies for therapy and support',
           'explanation'  => 'Partnerships connect schools with community resources like health and social services.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 146
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Advocacy for inclusive education often involves:',
           'choices'      => json_encode([
               'Promoting policies that support full participation',
               'Reducing funding for special programs',
               'Restricting students with disabilities from general classrooms',
               'Increasing segregation'
           ]),
           'answer'       => 'Promoting policies that support full participation',
           'explanation'  => 'Advocacy efforts aim to influence laws and policies to ensure inclusion.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 147
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Parent training programs in SNEd are designed to:',
           'choices'      => json_encode([
               'Equip families with strategies to support learning at home',
               'Change national curriculum standards',
               'Isolate parents from decision-making',
               'Provide medical diagnoses'
           ]),
           'answer'       => 'Equip families with strategies to support learning at home',
           'explanation'  => 'Training empowers parents to reinforce skills and behavior plans in home settings.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 148
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Culturally responsive practice in SNEd requires:',
           'choices'      => json_encode([
               'Valuing and integrating family culture into interventions',
               'Enforcing a single cultural norm',
               'Ignoring cultural differences',
               'Standardizing all approaches'
           ]),
           'answer'       => 'Valuing and integrating family culture into interventions',
           'explanation'  => 'Cultural responsiveness ensures interventions respect and reflect family backgrounds.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 149
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Professional boundaries in SNEd require teachers to:',
           'choices'      => json_encode([
               'Maintain appropriate relationships with students and families',
               'Share personal contact information freely',
               'Accept all social media friend requests',
               'Engage in dual relationships'
           ]),
           'answer'       => 'Maintain appropriate relationships with students and families',
           'explanation'  => 'Boundaries protect professional roles and support ethical practice.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 150
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Mandatory reporting of child abuse in SNEd is required by which law?',
           'choices'      => json_encode([
               'RA 7610',
               'RA 7277',
               'RA 10175',
               'RA 9442'
           ]),
           'answer'       => 'RA 7610',
           'explanation'  => 'The Child Abuse Law (RA 7610) mandates reporting of child abuse and exploitation.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 151
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'School-wide positive behavior support systems aim to:',
           'choices'      => json_encode([
               'Establish consistent expectations and supports for all students',
               'Punish misbehavior harshly',
               'Exclude students with disabilities',
               'Ignore challenging behaviors'
           ]),
           'answer'       => 'Establish consistent expectations and supports for all students',
           'explanation'  => 'PBIS uses proactive strategies to support positive behavior across the school.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 152
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Interagency collaboration in SNEd best describes:',
           'choices'      => json_encode([
               'Schools working with health, social, and community services',
               'Schools operating in isolation',
               'Families working alone',
               'Teachers working without supports'
           ]),
           'answer'       => 'Schools working with health, social, and community services',
           'explanation'  => 'Collaboration ensures holistic support by combining expertise from multiple sectors.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 153
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Ethical use of data in SNEd requires:',
           'choices'      => json_encode([
               'Protecting student privacy and using data to guide instruction',
               'Sharing data publicly without consent',
               'Using data solely for ranking purposes',
               'Ignoring data trends'
           ]),
           'answer'       => 'Protecting student privacy and using data to guide instruction',
           'explanation'  => 'Ethical practices ensure confidentiality and data-driven decision-making.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 154
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Community awareness campaigns for SNEd aim to:',
           'choices'      => json_encode([
               'Educate the public about disability rights and inclusion',
               'Promote segregation',
               'Limit support services',
               'Standardize exclusion'
           ]),
           'answer'       => 'Educate the public about disability rights and inclusion',
           'explanation'  => 'Campaigns raise awareness and foster inclusive attitudes in communities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 155
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Respite services for families of children with disabilities provide:',
           'choices'      => json_encode([
               'Temporary relief and support for caregivers',
               'Permanent placement in institutions',
               'Educational testing only',
               'Legal representation'
           ]),
           'answer'       => 'Temporary relief and support for caregivers',
           'explanation'  => 'Respite gives parents a break from caregiving duties to recharge.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 156
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Transition planning should involve which stakeholders?',
           'choices'      => json_encode([
               'Students, families, educators, and community agencies',
               'Only school administrators',
               'Only students alone',
               'General public'
           ]),
           'answer'       => 'Students, families, educators, and community agencies',
           'explanation'  => 'Inclusive transition planning ensures all stakeholders contribute to successful outcomes.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 157
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Ethical dilemmas in SNEd may involve:',
           'choices'      => json_encode([
               'Balancing individual needs with available resources',
               'Excluding families entirely',
               'Ignoring student voices',
               'Prioritizing staff convenience'
           ]),
           'answer'       => 'Balancing individual needs with available resources',
           'explanation'  => 'Ethical practice requires fair resource allocation while addressing specific needs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 158
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Collaboration with health professionals is important to:',
           'choices'      => json_encode([
               'Coordinate medical and educational interventions',
               'Limit educational services',
               'Replace family involvement',
               'Standardize curriculum'
           ]),
           'answer'       => 'Coordinate medical and educational interventions',
           'explanation'  => 'Health professionals provide expertise on medical aspects affecting learning.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 159
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Community resource mapping in SNEd helps to:',
           'choices'      => json_encode([
               'Identify local supports and services available to families',
               'Create isolated programs',
               'Focus only on school-based services',
               'Limit family engagement'
           ]),
           'answer'       => 'Identify local supports and services available to families',
           'explanation'  => 'Mapping resources connects families with relevant community assistance.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 160
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 8,
           'question'     => 'Ethical leadership in SNEd programs involves:',
           'choices'      => json_encode([
               'Modeling integrity and advocating for inclusive practices',
               'Prioritizing budget cuts',
               'Excluding stakeholder input',
               'Enforcing rigid policies'
           ]),
           'answer'       => 'Modeling integrity and advocating for inclusive practices',
           'explanation'  => 'Leaders set ethical standards and promote equity and inclusion within programs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
