<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart10Seeder extends Seeder
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
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Who has the primary duty to recommend or file charges after a preliminary investigation?',
    'choices'     => json_encode([
        'Public prosecutor',
        'Barangay official',
        'Private complainant',
        'Police investigator',
    ]),
    'answer'      => 'Public prosecutor',
    'explanation' => 'The prosecutor assesses evidence from preliminary investigation to decide on filing an information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which remedy is appropriate to contest the constitutionality of a special law before enforcement?',
    'choices'     => json_encode([
        'Petition for certiorari',
        'Action for injunction',
        'Writ of amparo',
        'Bill of exceptions',
    ]),
    'answer'      => 'Action for injunction',
    'explanation' => 'An injunction may enjoin enforcement of an unconstitutional law before application.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Under Rule 115 of the Rules of Court, how many days before trial must motions in limine be filed?',
    'choices'     => json_encode([
        'Five days',
        'Three days',
        'Ten days',
        'Seven days',
    ]),
    'answer'      => 'Three days',
    'explanation' => 'Motions in limine must be filed at least three days before trial proper to exclude evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which writ addresses violations of the right to speedy disposition of cases?',
    'choices'     => json_encode([
        'Writ of mandamus',
        'Writ of habeas corpus',
        'Writ of prohibition',
        'Writ of certiorari',
    ]),
    'answer'      => 'Writ of mandamus',
    'explanation' => 'Mandamus may compel public officers or courts to promptly decide and dispose of cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'What is the effect of filing a demurrer to evidence?',
    'choices'     => json_encode([
        'Case is dismissed',
        'Trial is postponed',
        'Conviction is reversed',
        'Sentence is suspended',
    ]),
    'answer'      => 'Case is dismissed',
    'explanation' => 'If the demurrer shows evidence is insufficient, the court dismisses the case without prejudice.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which concept refers to a criminal act extending over a period of time?',
    'choices'     => json_encode([
        'Continuing offense',
        'Complex crime',
        'Compound felony',
        'Grave felony',
    ]),
    'answer'      => 'Continuing offense',
    'explanation' => 'A continuing offense involves repeated acts constituting a single violation over time.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Under the Revised Penal Code, what is the penalty for a complex crime?',
    'choices'     => json_encode([
        'Penalty for most serious offense',
        'Maximum of all penalties imposed separately',
        'Life imprisonment',
        'Death penalty',
    ]),
    'answer'      => 'Penalty for most serious offense',
    'explanation' => 'Complex crimes are penalized by the penalty for the most serious offense committed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which writ may be used to access one’s own personal data held by the government?',
    'choices'     => json_encode([
        'Habeas data',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Habeas data',
    'explanation' => 'Habeas data grants access to and correction of personal information in government records.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which defense asserts the accused was compelled by threat of harm?',
    'choices'     => json_encode([
        'Duress',
        'Insanity',
        'Mistake of fact',
        'Necessity',
    ]),
    'answer'      => 'Duress',
    'explanation' => 'Duress is an affirmative defense when the accused acted under unlawful threat of harm.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'What is the prescriptive period for offenses punishable by arresto mayor plus a fine?',
    'choices'     => json_encode([
        'Two years',
        'One year',
        'Six months',
        'Three years',
    ]),
    'answer'      => 'Two years',
    'explanation' => 'Arresto mayor plus fine offenses prescribe after two years under the Revised Penal Code.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which proceeding ensures that juveniles are charged under a special system?',
    'choices'     => json_encode([
        'Juvenile proceedings',
        'Preliminary investigation',
        'Inquest proceedings',
        'Remand hearing',
    ]),
    'answer'      => 'Juvenile proceedings',
    'explanation' => 'Juvenile Justice and Welfare Act prescribes special proceedings distinct from adult criminal process.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which document formally terminates a writ of habeas corpus proceeding?',
    'choices'     => json_encode([
        'Return of writ',
        'Order of commitment',
        'Dismissal entry',
        'Information filed',
    ]),
    'answer'      => 'Return of writ',
    'explanation' => 'A return sets forth the reasons for detention and concludes the habeas corpus proceeding.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which principle prevents illegal searches by requiring probable cause and oath or affirmation?',
    'choices'     => json_encode([
        'Fourth Amendment equivalent',
        'Presumption of innocence',
        'Right to counsel',
        'Speedy trial right',
    ]),
    'answer'      => 'Fourth Amendment equivalent',
    'explanation' => 'Search warrant requirement is protected by constitutional prohibition against unreasonable searches.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which court has exclusive appellate jurisdiction over decisions of the Sandiganbayan?',
    'choices'     => json_encode([
        'Supreme Court',
        'Court of Appeals',
        'Regional Trial Court',
        'Municipal Trial Court',
    ]),
    'answer'      => 'Supreme Court',
    'explanation' => 'The Supreme Court reviews decisions of the Sandiganbayan under its appellate jurisdiction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which rule governs the form and contents of an information?',
    'choices'     => json_encode([
        'Rule 110',
        'Rule 112',
        'Rule 115',
        'Rule 118',
    ]),
    'answer'      => 'Rule 110',
    'explanation' => 'Rule 110 prescribes the form, contents, and sufficiency of the information in criminal cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'What is the effect of the accused’s failure to appear at arraignment without valid excuse?',
    'choices'     => json_encode([
        'Court may issue warrant for failure to appear',
        'Case is dismissed',
        'Bail is automatically granted',
        'Information is quashed',
    ]),
    'answer'      => 'Court may issue warrant for failure to appear',
    'explanation' => 'Non-appearance at arraignment may lead to issuance of bench warrant under Rules of Court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which proceeding determines the lawfulness of detention under custodial investigation?',
    'choices'     => json_encode([
        'Habeas corpus hearing',
        'Inquest proceedings',
        'Preliminary investigation',
        'Suppression hearing',
    ]),
    'answer'      => 'Habeas corpus hearing',
    'explanation' => 'Habeas corpus examines legality of detention irrespective of criminal process stage.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which writ challenges the validity of a subpoena duces tecum?',
    'choices'     => json_encode([
        'Certiorari',
        'Mandamus',
        'Prohibition',
        'Habeas corpus',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari may quash acts of court officers issuing invalid process.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which accessory after the fact involves assisting the culprit to escape?',
    'choices'     => json_encode([
        'Harboring a fugitive',
        'Aiding Public Officer',
        'Subornation of perjury',
        'Obstruction of justice',
    ]),
    'answer'      => 'Harboring a fugitive',
    'explanation' => 'Harboring a fugitive who has committed a crime constitutes accessory after the fact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 10,
    'question'    => 'Which writ addresses unlawful detention and compels immediate release of detained persons?',
    'choices'     => json_encode([
        'Habeas corpus',
        'Writ of amparo',
        'Mandamus',
        'Certiorari',
    ]),
    'answer'      => 'Habeas corpus',
    'explanation' => 'Habeas corpus is the remedy for unlawful restraint and seeks immediate release of detainees.',
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
