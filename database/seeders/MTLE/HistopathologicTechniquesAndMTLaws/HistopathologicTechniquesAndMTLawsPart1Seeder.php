<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart1Seeder extends Seeder
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

$batch = [
    //1
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is the primary function of 10% neutral buffered formalin in histopathology?',
        'choices'     => json_encode([
            'Tissue fixation and cross-linking proteins',
            'Decalcification of bone tissue',
            'Embedding medium for frozen section',
            'Staining nucleic acids',
        ]),
        'answer'      => 'Tissue fixation and cross-linking proteins',
        'explanation' => '10% neutral buffered formalin preserves tissue morphology by forming methylene bridges between amino groups of proteins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which embedding medium is used for routine paraffin histology?',
        'choices'     => json_encode([
            'Paraffin wax',
            'O.C.T. compound',
            'Resin',
            'Gelatin',
        ]),
        'answer'      => 'Paraffin wax',
        'explanation' => 'Paraffin wax provides firm support for microtomy of fixed tissue sections at 4–6 µm thickness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is the purpose of xylene in tissue processing?',
        'choices'     => json_encode([
            'Clearing agent to remove alcohol and prepare tissue for paraffin infiltration',
            'Decalcification of bone',
            'Fixation of tissues',
            'Staining lipids',
        ]),
        'answer'      => 'Clearing agent to remove alcohol and prepare tissue for paraffin infiltration',
        'explanation' => 'Xylene replaces alcohol in processed tissue, making it miscible with paraffin wax during embedding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which microtome knife angle is optimal for sectioning paraffin blocks?',
        'choices'     => json_encode([
            '3–5 degrees',
            '30–35 degrees',
            '60–70 degrees',
            '90 degrees',
        ]),
        'answer'      => '30–35 degrees',
        'explanation' => 'A knife angle of 30–35° produces smooth, wrinkle-free paraffin sections at 4–6 µm thickness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which stain is the standard for general histological examination?',
        'choices'     => json_encode([
            'Hematoxylin and eosin',
            'Periodic acid–Schiff',
            'Masson’s trichrome',
            'Silver stain',
        ]),
        'answer'      => 'Hematoxylin and eosin',
        'explanation' => 'H&E stain highlights nuclei (blue) and cytoplasm/extracellular matrix (pink) for routine morphology.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is the role of citrate buffer in antigen retrieval for immunohistochemistry?',
        'choices'     => json_encode([
            'Restore antigenicity by breaking protein cross-links',
            'Fix tissue proteins',
            'Embed tissue',
            'Counterstain nuclei',
        ]),
        'answer'      => 'Restore antigenicity by breaking protein cross-links',
        'explanation' => 'Heat-induced epitope retrieval in citrate buffer unmasks antigens by reversing formalin cross-links.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which decalcifying agent preserves nucleic acids best for downstream molecular assays?',
        'choices'     => json_encode([
            'EDTA',
            'Formic acid',
            'Nitric acid',
            'Hydrochloric acid',
        ]),
        'answer'      => 'EDTA',
        'explanation' => 'EDTA chelates calcium gently, preserving DNA/RNA integrity better than strong acids.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What thickness is recommended for paraffin sections in light microscopy?',
        'choices'     => json_encode([
            '4–6 µm',
            '1–2 µm',
            '10–12 µm',
            '20–30 µm',
        ]),
        'answer'      => '4–6 µm',
        'explanation' => 'Sections of 4–6 µm allow optimal resolution and staining for diagnostic histology.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which embedding temperature is optimal for paraffin wax?',
        'choices'     => json_encode([
            '56–60°C',
            '37°C',
            '100°C',
            '4°C',
        ]),
        'answer'      => '56–60°C',
        'explanation' => 'Paraffin infiltration at 56–60°C ensures melt and penetration without overheating tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Republic Act No. 5941 governs the practice of which profession in the Philippines?',
        'choices'     => json_encode([
            'Medical Technology',
            'Nursing',
            'Pharmacy',
            'Dentistry',
        ]),
        'answer'      => 'Medical Technology',
        'explanation' => 'RA 5941, enacted in 1969, regulates the practice, licensure, and duties of medical technologists in the Philippines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which body administers and promulgates regulations for medical technologists in the Philippines?',
        'choices'     => json_encode([
            'Professional Regulation Commission',
            'Department of Health',
            'Philippine Medical Association',
            'Food and Drug Administration',
        ]),
        'answer'      => 'Professional Regulation Commission',
        'explanation' => 'The PRC, through the Medical Technology Board, oversees licensure exams and professional standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is the composition of the Board of Medical Technology?',
        'choices'     => json_encode([
            'Chairman (PRC) + three medical technologists',
            'Five medical doctors',
            'Chairman (DOH) + two nurses',
            'Five medical technologists',
        ]),
        'answer'      => 'Chairman (PRC) + three medical technologists',
        'explanation' => 'The Board consists of the PRC Chairman (or representative) as chairman and three registered medical technologists.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is required for a foreign medical technologist to practice in the Philippines?',
        'choices'     => json_encode([
            'Special Temporary Permit from PRC',
            'Philippine citizenship only',
            'No requirement if licensed abroad',
            'DOH accreditation',
        ]),
        'answer'      => 'Special Temporary Permit from PRC',
        'explanation' => 'Foreigners need an STP and must pass local equivalency or licensure exams per PRC rules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'How often must a licensed medical technologist renew their PRC license?',
        'choices'     => json_encode([
            'Every three years',
            'Every year',
            'Every five years',
            'No renewal required',
        ]),
        'answer'      => 'Every three years',
        'explanation' => 'Medical technologists renew their license every three years as mandated by PRC regulations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which act prescribes the Code of Ethics for medical technologists?',
        'choices'     => json_encode([
            'DOH Administrative Order',
            'RA 9502 (Healthcare Professions Education)',
            'PRC Resolution',
            'Department Circular (DOH)',
        ]),
        'answer'      => 'DOH Administrative Order',
        'explanation' => 'The DOH issues administrative orders prescribing the Code of Ethics and standards of practice.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'What is the minimum educational requirement to take the MT licensure exam?',
        'choices'     => json_encode([
            'Bachelor of Science in Medical Technology',
            'High school diploma',
            'Associate\'s degree in any field',
            'Bachelor of Science in Biology',
        ]),
        'answer'      => 'Bachelor of Science in Medical Technology',
        'explanation' => 'Only graduates of a recognized BS Medical Technology or BS MedTech program may qualify for the licensure exam.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which violation may lead to suspension of a medical technologist’s license?',
        'choices'     => json_encode([
            'Practicing without valid license',
            'Publishing research articles',
            'Attending seminars abroad',
            'Teaching in accredited schools',
        ]),
        'answer'      => 'Practicing without valid license',
        'explanation' => 'According to RA 5941, unlicensed practice is a punishable offense leading to fines and suspension.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which process involves dehydrating tissue through graded alcohols?',
        'choices'     => json_encode([
            'Tissue processing',
            'Antigen retrieval',
            'Embedding',
            'Microtomy',
        ]),
        'answer'      => 'Tissue processing',
        'explanation' => 'Processing includes fixation, dehydration, clearing, and paraffin infiltration steps.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which fixative is preferred for electron microscopy?',
        'choices'     => json_encode([
            'Glutaraldehyde',
            'Formalin',
            'Ethanol',
            'Acetone',
        ]),
        'answer'      => 'Glutaraldehyde',
        'explanation' => 'Glutaraldehyde preserves ultrastructure by cross-linking proteins more effectively than formalin.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 37,
        'part'        => 1,
        'question'    => 'Which law mandates continuing professional education for medical technologists?',
        'choices'     => json_encode([
            'RA 10912 (Continuing Professional Development Act)',
            'RA 5941',
            'RA 9502',
            'DOH Administrative Order',
        ]),
        'answer'      => 'RA 10912 (Continuing Professional Development Act)',
        'explanation' => 'RA 10912 requires licensed professionals to complete CPD credits for license renewal.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
