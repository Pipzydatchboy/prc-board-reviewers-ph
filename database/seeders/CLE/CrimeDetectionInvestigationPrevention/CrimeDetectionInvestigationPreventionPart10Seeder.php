<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart10Seeder extends Seeder
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
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which forensic method uses ninhydrin to detect latent fingerprints on porous surfaces?',
    'choices'     => json_encode([
        'Ninhydrin spray',
        'Cyanoacrylate fuming',
        'Powder dusting',
        'Vacuum metal deposition',
    ]),
    'answer'      => 'Ninhydrin spray',
    'explanation' => 'Ninhydrin reacts with amino acids in latent prints, producing a purple color on paper and other porous items.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Under the Revised Penal Code, which crime incorporates elements of lure and deception against a victim’s property?',
    'choices'     => json_encode([
        'Estafa',
        'Robbery',
        'Theft',
        'Carnapping',
    ]),
    'answer'      => 'Estafa',
    'explanation' => 'Estafa involves defrauding a victim through deceit or abuse of confidence to gain wrongful possession of property.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which fire detection system responds to heat rather than smoke?',
    'choices'     => json_encode([
        'Heat detector',
        'Ionization smoke detector',
        'Photoelectric smoke detector',
        'Flame detector',
    ]),
    'answer'      => 'Heat detector',
    'explanation' => 'Heat detectors activate at a specific temperature or rate of rise, independent of smoke presence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which Cybercrime Act offense involves forging digital signatures or authentication features?',
    'choices'     => json_encode([
        'Electronic forgery',
        'System interference',
        'Illegal access',
        'Cyber libel',
    ]),
    'answer'      => 'Electronic forgery',
    'explanation' => 'Electronic forgery (RA 10175 Article 8(b)) penalizes the creation or alteration of data to mislead.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which environmental law prohibits the unauthorized discharge of toxic substances into Philippine waters?',
    'choices'     => json_encode([
        'Clean Water Act (RA 9275)',
        'Clean Air Act (RA 8749)',
        'Wildlife Act (RA 9147)',
        'Fisheries Code (RA 8550)',
    ]),
    'answer'      => 'Clean Water Act (RA 9275)',
    'explanation' => 'RA 9275 requires permits for wastewater discharge to prevent water pollution and protect public health.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which principle of chain-of-custody ensures each transfer of evidence is documented by signature and date?',
    'choices'     => json_encode([
        'Accountability principle',
        'Security principle',
        'Reliability principle',
        'Integrity principle',
    ]),
    'answer'      => 'Accountability principle',
    'explanation' => 'Accountability requires that all handlers of evidence sign and date transfer logs to maintain a clear trail.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which section of a police report contains recommendations for further action?',
    'choices'     => json_encode([
        'Conclusion and recommendations',
        'Methodology',
        'Background',
        'Scene description',
    ]),
    'answer'      => 'Conclusion and recommendations',
    'explanation' => 'This section summarizes findings and suggests follow-up steps such as arrests or safety measures.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which traffic investigation measurement is taken perpendicular to the skid mark to determine yaw angle?',
    'choices'     => json_encode([
        'Chord length',
        'Span width',
        'Chord offset',
        'Turning radius',
    ]),
    'answer'      => 'Chord offset',
    'explanation' => 'Chord offset measures the deviation from a straight line to calculate vehicle yaw and speed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which interrogation model avoids deception and focuses on information exchange rather than confession?',
    'choices'     => json_encode([
        'Information-gathering approach',
        'Reid technique',
        'PEACE model',
        'Polygraph-assisted interrogation',
    ]),
    'answer'      => 'Information-gathering approach',
    'explanation' => 'This approach prioritizes rapport and open dialogue to collect factual information without coercion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which device is used in digital forensics to image a hard drive without altering its data?',
    'choices'     => json_encode([
        'Hardware write-blocker',
        'Disk defragmenter',
        'Data recovery software',
        'Filesystem cleaner',
    ]),
    'answer'      => 'Hardware write-blocker',
    'explanation' => 'Write-blockers prevent write commands to the drive, preserving original evidence during imaging.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which crime prevention strategy uses CCTV and alarms to increase perceived risk to offenders?',
    'choices'     => json_encode([
        'Surveillance enhancement',
        'Community mobilization',
        'Environmental maintenance',
        'Social development',
    ]),
    'answer'      => 'Surveillance enhancement',
    'explanation' => 'Enhancing surveillance through cameras and alarms deters crime by raising the probability of detection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which term describes the distortion of witness memory due to suggestive questioning?',
    'choices'     => json_encode([
        'Memory contamination',
        'Flashbulb memory',
        'Primary recall',
        'Memory consolidation',
    ]),
    'answer'      => 'Memory contamination',
    'explanation' => 'Suggestive or leading questions can introduce new information, contaminating original witness memory.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which Republic Act mandates the registration of firearms and authorizes regular PNP inspection?',
    'choices'     => json_encode([
        'RA 10591',
        'RA 6539',
        'RA 10175',
        'RA 9165',
    ]),
    'answer'      => 'RA 10591',
    'explanation' => 'RA 10591, the Comprehensive Firearms and Ammunition Regulation Act, governs registration and control of firearms.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which section of an accident report logs environmental factors such as weather and road conditions?',
    'choices'     => json_encode([
        'Environmental conditions',
        'Driver statement',
        'Witness accounts',
        'Vehicle details',
    ]),
    'answer'      => 'Environmental conditions',
    'explanation' => 'Documenting weather, lighting, and road surface is critical for accurate accident reconstruction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which medical-legal term describes bruising caused by blunt force trauma?',
    'choices'     => json_encode([
        'Contusion',
        'Abrasion',
        'Laceration',
        'Puncture wound',
    ]),
    'answer'      => 'Contusion',
    'explanation' => 'Contusions are hemorrhages under the skin resulting from blunt trauma without skin breach.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which interview approach uses free narrative followed by specific probing questions?',
    'choices'     => json_encode([
        'Funnel technique',
        'Reid technique',
        'PEACE model',
        'Cognitive interview',
    ]),
    'answer'      => 'Funnel technique',
    'explanation' => 'The funnel technique starts broad and narrows down with directed questions to clarify details.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which device is deployed at a fire scene to detect levels of toxic gases like carbon monoxide?',
    'choices'     => json_encode([
        'Multi-gas detector',
        'Smoke detector',
        'Heat detector',
        'Gas chromatograph',
    ]),
    'answer'      => 'Multi-gas detector',
    'explanation' => 'Multi-gas detectors measure concentrations of various hazardous gases in fire environments.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which probationary review evaluates an officer’s capability to write clear and accurate reports?',
    'choices'     => json_encode([
        'Technical writing assessment',
        'Physical fitness test',
        'Marksmanship evaluation',
        'Vehicle inspection',
    ]),
    'answer'      => 'Technical writing assessment',
    'explanation' => 'Assessments of report writing skills ensure officers meet documentation standards.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which digital evidence acquisition principle preserves original metadata of files?',
    'choices'     => json_encode([
        'Forensic imaging',
        'Copy-paste extraction',
        'Manual download',
        'Screen capture',
    ]),
    'answer'      => 'Forensic imaging',
    'explanation' => 'Imaging creates a bit-for-bit copy, retaining all metadata and hidden data structures.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 10,
    'question'    => 'Which crime prevention measure focuses on improving street lighting to increase visibility at night?',
    'choices'     => json_encode([
        'Natural surveillance enhancement',
        'Target removal',
        'Community watch',
        'Legal reform',
    ]),
    'answer'      => 'Natural surveillance enhancement',
    'explanation' => 'Improving lighting increases visibility, deterring offenders and aiding detection.',
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
