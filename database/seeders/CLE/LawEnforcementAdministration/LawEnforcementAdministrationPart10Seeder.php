<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which code outlines the ethical standards and conduct expected of Philippine National Police officers?',
    'choices'     => json_encode([
        'PNP Code of Conduct and Ethical Standards',
        'Philippine Public Officials Code',
        'National Integrity Program',
        'Police Oath of Office',
    ]),
    'answer'      => 'PNP Code of Conduct and Ethical Standards',
    'explanation' => 'This Code prescribes ethical obligations, integrity, and professionalism for PNP members.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'What accreditation framework ensures continuous quality improvement in law enforcement agencies?',
    'choices'     => json_encode([
        'PDCA (Plan-Do-Check-Act)',
        'SWOT (Strengths-Weaknesses-Opportunities-Threats)',
        'PEST (Political-Economic-Social-Technological)',
        'SARA (Scanning-Analysis-Response-Assessment)',
    ]),
    'answer'      => 'PDCA (Plan-Do-Check-Act)',
    'explanation' => 'PDCA is a cycle for planning, implementing, evaluating, and improving processes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which strategy engages community members as partners in public safety through regular forums and feedback?',
    'choices'     => json_encode([
        'Community policing',
        'Zero-tolerance policing',
        'Hotspot policing',
        'Broken windows policing',
    ]),
    'answer'      => 'Community policing',
    'explanation' => 'Community policing fosters collaboration and problem-solving with citizens.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'What tool uses geospatial data to identify and monitor crime concentration areas?',
    'choices'     => json_encode([
        'Crime mapping',
        'Resource allocation chart',
        'Personnel roster',
        'Operational calendar',
    ]),
    'answer'      => 'Crime mapping',
    'explanation' => 'Crime mapping visualizes incident data on maps to guide patrol deployment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which model focuses on analyzing specific crime problems and developing tailored responses?',
    'choices'     => json_encode([
        'Problem-Oriented Policing',
        'Community policing',
        'Reactive policing',
        'Decoy policing',
    ]),
    'answer'      => 'Problem-Oriented Policing',
    'explanation' => 'Problem-Oriented Policing uses the SARA model to address underlying causes of crime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'What statistical report aggregates crime data to provide monthly summaries to management?',
    'choices'     => json_encode([
        'Uniform Crime Report',
        'Daily Incident Log',
        'Arrest Warrant Index',
        'Intelligence Bulletin',
    ]),
    'answer'      => 'Uniform Crime Report',
    'explanation' => 'The UCR compiles standardized crime statistics for trend analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which policy defines allowable levels of force and escalation for officers in the field?',
    'choices'     => json_encode([
        'Use-of-force policy',
        'Ethics code',
        'Training manual',
        'Archive procedure',
    ]),
    'answer'      => 'Use-of-force policy',
    'explanation' => 'This policy outlines procedures and legal standards for use of force.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which system logs officer activities, assignments, and training electronically?',
    'choices'     => json_encode([
        'Law Enforcement Records Management System',
        'Crime Analysis Portal',
        'Budget Information System',
        'Vehicle Maintenance Tracker',
    ]),
    'answer'      => 'Law Enforcement Records Management System',
    'explanation' => 'LERM systems centralize records on personnel, incidents, and training.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'What mechanism allows citizens to submit complaints and commendations regarding police service?',
    'choices'     => json_encode([
        'Police Citizen\'s Complaint Office',
        'Internal Affairs Division',
        'Legal Bureau',
        'Public Information Office',
    ]),
    'answer'      => 'Police Citizen\'s Complaint Office',
    'explanation' => 'The PCCO handles feedback, investigations, and disciplinary referrals from the public.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which planning component ensures critical police records are backed up and retrievable?',
    'choices'     => json_encode([
        'Records continuity plan',
        'Personnel assignment chart',
        'Operational directive',
        'Budget review cycle',
    ]),
    'answer'      => 'Records continuity plan',
    'explanation' => 'This plan outlines backup schedules and recovery procedures for essential records.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which evaluation metric measures the proportion of cases solved to cases filed?',
    'choices'     => json_encode([
        'Case clearance rate',
        'Response time index',
        'Arrest ratio',
        'Public satisfaction score',
    ]),
    'answer'      => 'Case clearance rate',
    'explanation' => 'Clearance rate reflects investigative effectiveness by comparing solved cases to total cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which system integrates biometric identification of suspects and offenders?',
    'choices'     => json_encode([
        'Automated Biometric Identification System (ABIS)',
        'Computer-Aided Dispatch',
        'Mobile Data Terminal',
        'Vehicle Locator System',
    ]),
    'answer'      => 'Automated Biometric Identification System (ABIS)',
    'explanation' => 'ABIS matches fingerprints and facial data against a criminal database.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which mandate requires police to protect the privacy of personal data they collect?',
    'choices'     => json_encode([
        'Data Privacy Act',
        'Freedom of Information Act',
        'Public Records Law',
        'Official Secrets Act',
    ]),
    'answer'      => 'Data Privacy Act',
    'explanation' => 'The RA 10173 sets standards for collecting, storing, and using personal information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which shift schedule is legally mandated for PNP officers to ensure rest periods?',
    'choices'     => json_encode([
        '8-hours on, 16-hours off',
        '12-hours on, 12-hours off',
        '24-hours on, 48-hours off',
        '6-hours on, 18-hours off',
    ]),
    'answer'      => '8-hours on, 16-hours off',
    'explanation' => 'Standard shifts ensure adequate rest and comply with labor guidelines for uniformed personnel.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which policy governs mandatory wearing of body armor by patrol officers?',
    'choices'     => json_encode([
        'PNP Uniform and Equipment Manual',
        'Use-of-force policy',
        'Operational procedures directive',
        'General orders',
    ]),
    'answer'      => 'PNP Uniform and Equipment Manual',
    'explanation' => 'This manual specifies required safety gear, including ballistic vests, for various duties.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which community engagement structure advises police on local issues and priorities?',
    'choices'     => json_encode([
        'Police-Citizen Advisory Board',
        'Internal Affairs Committee',
        'Operational Planning Group',
        'Traffic Management Council',
    ]),
    'answer'      => 'Police-Citizen Advisory Board',
    'explanation' => 'PCABs provide a forum for community input on policing strategies and policies.',
    'created_at'  => $now,  
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which document establishes standard procedures for writing operational orders and guidelines?',
    'choices'     => json_encode([
        'Standard Operating Procedure (SOP) Manual',
        'Crime Statistics Handbook',
        'Personnel Records Guide',
        'Budget Planning Workbook',
    ]),
    'answer'      => 'Standard Operating Procedure (SOP) Manual',
    'explanation' => 'SOPs ensure consistency and clarity in executing tasks across units.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which training requirement ensures officers are proficient in first aid and lifesaving techniques?',
    'choices'     => json_encode([
        'Emergency Medical Response Training',
        'Firearms Qualification',
        'Driving Course',
        'Investigation Workshop',
    ]),
    'answer'      => 'Emergency Medical Response Training',
    'explanation' => 'This training equips officers to render medical aid at incident scenes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'What mechanism allows PNP to track budget execution and performance indicators electronically?',
    'choices'     => json_encode([
        'Police Management Information System (PMIS)',
        'Crime Data Repository',
        'Personnel Evaluation Portal',
        'Equipment Inventory App',
    ]),
    'answer'      => 'Police Management Information System (PMIS)',
    'explanation' => 'PMIS modules handle finance, logistics, and performance metrics for data-driven decisions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 10,
    'question'    => 'Which governance mechanism requires periodic audits of police operations and finances?',
    'choices'     => json_encode([
        'Commission on Audit reviews',
        'Internal Affairs audits',
        'Public Safety Inspections',
        'Community Satisfaction Surveys',
    ]),
    'answer'      => 'Commission on Audit reviews',
    'explanation' => 'COA conducts financial and operational audits of all government agencies, including the PNP.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
