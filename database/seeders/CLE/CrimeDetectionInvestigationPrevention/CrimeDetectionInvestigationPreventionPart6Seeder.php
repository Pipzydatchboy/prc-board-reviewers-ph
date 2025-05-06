<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart6Seeder extends Seeder
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
    'part'        => 6,
    'question'    => 'Which Republic Act is known as the Comprehensive Dangerous Drugs Act of the Philippines?',
    'choices'     => json_encode([
        'RA 9165',
        'RA 9208',
        'RA 10175',
        'RA 8749',
    ]),
    'answer'      => 'RA 9165',
    'explanation' => 'RA 9165, enacted in 2002, codifies offenses and penalties for illegal drugs and substances.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Under RA 9165, which schedule includes methamphetamine ("shabu")?',
    'choices'     => json_encode([
        'Schedule II',
        'Schedule I',
        'Schedule III',
        'Schedule IV',
    ]),
    'answer'      => 'Schedule II',
    'explanation' => 'Schedule II lists dangerous drugs such as methamphetamine and amphetamine derivatives.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which preliminary test is commonly used at a crime scene to detect cocaine residue?',
    'choices'     => json_encode([
        'Scott test',
        'Marquis test',
        'Duquenois-Levine test',
        'Silver nitrate test',
    ]),
    'answer'      => 'Scott test',
    'explanation' => 'The Scott test produces a blue color in the presence of cocaine.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'What is the primary purpose of the chain-of-custody procedure in drug cases?',
    'choices'     => json_encode([
        'Maintain integrity and admissibility of evidence',
        'Secure storage space',
        'Facilitate undercover operations',
        'Coordinate inter-agency communication',
    ]),
    'answer'      => 'Maintain integrity and admissibility of evidence',
    'explanation' => 'Chain-of-custody logs each transfer of evidence to prevent tampering.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which document records each handler of a seized drug sample?',
    'choices'     => json_encode([
        'Chain-of-custody form',
        'Evidence receipt ticket',
        'Incident blotter',
        'Search warrant',
    ]),
    'answer'      => 'Chain-of-custody form',
    'explanation' => 'The chain-of-custody form tracks custody, control, transfer, and analysis of evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'What is the penalty for simple possession of less than one gram of methamphetamine under RA 9165?',
    'choices'     => json_encode([
        'Prision correccional in its minimum period',
        'Life imprisonment',
        'Reclusion perpetua',
        'Death penalty',
    ]),
    'answer'      => 'Prision correccional in its minimum period',
    'explanation' => 'Possession of small quantities is penalized with prision correccional as lowest term.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which body regulates and supervises all anti-drug efforts in the Philippines?',
    'choices'     => json_encode([
        'Dangerous Drugs Board',
        'PNP Narcotics Group',
        'Philippine Drug Enforcement Agency',
        'DOH Center for Health Development',
    ]),
    'answer'      => 'Dangerous Drugs Board',
    'explanation' => 'The DDB sets policies and regulations for drug prevention and control.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which agency is the primary implementing arm for drug law enforcement?',
    'choices'     => json_encode([
        'Philippine Drug Enforcement Agency',
        'National Bureau of Investigation',
        'Bureau of Customs',
        'PNP Criminal Investigation and Detection Group',
    ]),
    'answer'      => 'Philippine Drug Enforcement Agency',
    'explanation' => 'PDEA enforces RA 9165, conducts operations, and coordinates with other agencies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which provision requires mandatory rehabilitation of first-time drug users?',
    'choices'     => json_encode([
        'RA 9165 Section 15',
        'RA 9165 Section 5',
        'RA 9165 Section 21',
        'RA 9165 Section 33',
    ]),
    'answer'      => 'RA 9165 Section 15',
    'explanation' => 'Section 15 mandates treatment and rehabilitation for first-time users.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which reagent is used in the Marquis test for opiates and amphetamines?',
    'choices'     => json_encode([
        'Formaldehyde and sulfuric acid',
        'Potassium permanganate',
        'Dimethylglyoxime',
        'Nitric acid',
    ]),
    'answer'      => 'Formaldehyde and sulfuric acid',
    'explanation' => 'Marquis reagent (formaldehyde + H₂SO₄) yields purple to orange colors with opiates and amphetamines.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Under RA 9165, which act is punishable by life imprisonment to death?',
    'choices'     => json_encode([
        'Drug trafficking',
        'Possession for personal use',
        'Possession of paraphernalia',
        'Simple use of illegal drugs',
    ]),
    'answer'      => 'Drug trafficking',
    'explanation' => 'Trafficking of dangerous drugs incurs severe penalties including life imprisonment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which offense involves operating an illegal gambling house under PD 1602?',
    'choices'     => json_encode([
        'Illegal gambling',
        'Estafa',
        'Prostitution',
        'Drug peddling',
    ]),
    'answer'      => 'Illegal gambling',
    'explanation' => 'PD 1602 penalizes persons operating or maintaining unsanctioned gambling establishments.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which law penalizes the hiring, recruitment, or employment of a person through abduction or fraud for prostitution?',
    'choices'     => json_encode([
        'RA 9208',
        'RA 9165',
        'RA 8353',
        'RA 7610',
    ]),
    'answer'      => 'RA 9208',
    'explanation' => 'RA 9208, the Anti-Trafficking in Persons Act, criminalizes coercion into prostitution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which provision covers penalties for vagrants and street walkers (prostitutes) under the RPC?',
    'choices'     => json_encode([
        'RPC Article 202',
        'RPC Article 324',
        'RPC Article 312',
        'RPC Article 246',
    ]),
    'answer'      => 'RPC Article 202',
    'explanation' => 'RPC Article 202 punishes vagrancy, including prostitutes and pickpockets.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which agency conducts preliminary drug laboratory analysis in the PNP?',
    'choices'     => json_encode([
        'PNP Crime Laboratory, ND and DD Section',
        'Forensic Chemistry Unit of DOJ',
        'PNP Forensic Odontology Unit',
        'PNP Traffic Management Group',
    ]),
    'answer'      => 'PNP Crime Laboratory, ND and DD Section',
    'explanation' => 'The Narcotic Drugs and Dangerous Drugs section handles initial and confirmatory tests.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which method is used to visually document illicit drug evidence at a scene?',
    'choices'     => json_encode([
        'Photographing evidence in situ',
        'Audio recording',
        'Sketching vehicle outlines',
        '3D laser scanning',
    ]),
    'answer'      => 'Photographing evidence in situ',
    'explanation' => 'Photographs capture the precise location and condition of drugs before collection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which breathalyzer method estimates blood alcohol concentration from breath alcohol?',
    'choices'     => json_encode([
        'Infrared spectroscopy',
        'Gas chromatography',
        'Mass spectrometry',
        'Titration',
    ]),
    'answer'      => 'Infrared spectroscopy',
    'explanation' => 'Modern breathalyzers use infrared absorption to quantify ethanol content inhaled.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Under which RA is the establishment of Casinos and gambling casinos regulated by PAGCOR?',
    'choices'     => json_encode([
        'PD 1869 as amended by RA 11661',
        'RA 7610',
        'RA 9165',
        'RA 9247',
    ]),
    'answer'      => 'PD 1869 as amended by RA 11661',
    'explanation' => 'PD 1869, modified by RA 11661, vests PAGCOR the power to regulate casinos and gambling.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which principle ensures proper labeling of drug evidence containers?',
    'choices'     => json_encode([
        'Labeling and sealing integrity principle',
        'Presumption of innocence',
        'Exclusionary rule',
        'Best evidence rule',
    ]),
    'answer'      => 'Labeling and sealing integrity principle',
    'explanation' => 'Proper labeling and sealing prevent contamination and ensure chain-of-custody.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 6,
    'question'    => 'Which penalty applies to operators of clandestine drug laboratories under RA 9165?',
    'choices'     => json_encode([
        'Life imprisonment to death',
        'Prision correccional',
        'Fine only',
        'Administrative sanction',
    ]),
    'answer'      => 'Life imprisonment to death',
    'explanation' => 'Operating clandestine labs is a form of trafficking, meriting the highest penalties.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
