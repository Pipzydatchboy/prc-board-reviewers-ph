<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart8Seeder extends Seeder
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

       // Part 8 – Basic Electronics – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the primary function of a resistor in an electrical circuit?',
           'choices'      => json_encode([
               'Limit current flow',
               'Store energy',
               'Rectify voltage',
               'Generate electromagnetism',
           ]),
           'answer'       => 'Limit current flow',
           'explanation'  => 'Resistors impede the flow of electric current, allowing precise control of circuit behavior.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which schematic symbol represents a capacitor?',
           'choices'      => json_encode([
               'Two parallel lines',
               'Zigzag line',
               'Circle with leads',
               'Triangle',
           ]),
           'answer'       => 'Two parallel lines',
           'explanation'  => 'A capacitor is depicted by two parallel plates in circuit diagrams.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the SI unit of inductance?',
           'choices'      => json_encode([
               'Henry',
               'Farad',
               'Ohm',
               'Tesla',
           ]),
           'answer'       => 'Henry',
           'explanation'  => 'Inductance is measured in henrys (H), named after Joseph Henry.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What does LED stand for in electronics?',
           'choices'      => json_encode([
               'Light Emitting Diode',
               'Low Energy Device',
               'Liquid Electrolyte Display',
               'Linear Embedded Driver',
           ]),
           'answer'       => 'Light Emitting Diode',
           'explanation'  => 'LEDs are semiconductors that emit light when current flows through them.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which component allows current to flow in only one direction?',
           'choices'      => json_encode([
               'Diode',
               'Resistor',
               'Capacitor',
               'Inductor',
           ]),
           'answer'       => 'Diode',
           'explanation'  => 'Diodes conduct when forward-biased and block current in reverse, acting as one-way valves.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the typical forward voltage drop of a silicon diode?',
           'choices'      => json_encode([
               '0.7 V',
               '1.2 V',
               '0.2 V',
               '2.0 V',
           ]),
           'answer'       => '0.7 V',
           'explanation'  => 'Silicon diodes typically drop about 0.7 volts when conducting forward current.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which instrument is used to visualize waveform and frequency in electrical signals?',
           'choices'      => json_encode([
               'Oscilloscope',
               'Multimeter',
               'Voltmeter',
               'Ammeter',
           ]),
           'answer'       => 'Oscilloscope',
           'explanation'  => 'Oscilloscopes display voltage versus time, allowing analysis of signal shape and frequency.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which fundamental law states that induced EMF is proportional to the rate of change of magnetic flux?',
           'choices'      => json_encode([
               'Faraday’s Law',
               'Ohm’s Law',
               'Kirchhoff’s Law',
               'Gauss’s Law',
           ]),
           'answer'       => 'Faraday’s Law',
           'explanation'  => 'Faraday’s Law describes how a changing magnetic field induces voltage in a conductor.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'In a purely inductive AC circuit, the current lags the voltage by how many degrees?',
           'choices'      => json_encode([
               '90°',
               '45°',
               '0°',
               '180°',
           ]),
           'answer'       => '90°',
           'explanation'  => 'Inductive reactance causes current to lag voltage by a quarter cycle (90°).',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the formula for capacitive reactance (Xc) in AC circuits?',
           'choices'      => json_encode([
               '1 / (2πfC)',
               '2πfL',
               'R × C',
               'V / I',
           ]),
           'answer'       => '1 / (2πfC)',
           'explanation'  => 'Capacitive reactance is inversely proportional to frequency and capacitance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which filter allows frequencies below a cutoff to pass?',
           'choices'      => json_encode([
               'Low-pass filter',
               'High-pass filter',
               'Band-pass filter',
               'Notch filter',
           ]),
           'answer'       => 'Low-pass filter',
           'explanation'  => 'Low-pass filters attenuate frequencies above the cutoff while passing lower frequencies.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What resistor color code represents a 10 kΩ ±5% resistor?',
           'choices'      => json_encode([
               'Brown-Black-Orange',
               'Red-Red-Red',
               'Yellow-Violet-Black',
               'Orange-Orange-Red',
           ]),
           'answer'       => 'Brown-Black-Orange',
           'explanation'  => 'Brown(1), Black(0), Orange multiplier(10^3) yields 10 kΩ.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which semiconductor device is primarily used to amplify electrical signals?',
           'choices'      => json_encode([
               'Transistor',
               'Diode',
               'Resistor',
               'Capacitor',
           ]),
           'answer'       => 'Transistor',
           'explanation'  => 'Transistors control current flow and can amplify voltage or current in circuits.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the purpose of a breadboard in electronics?',
           'choices'      => json_encode([
               'Prototype circuits without soldering',
               'Permanent assembly of PCBs',
               'Measure high voltage',
               'Store electronic components',
           ]),
           'answer'       => 'Prototype circuits without soldering',
           'explanation'  => 'Breadboards allow quick assembly and modification of test circuits without permanent connections.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which component stores energy in a magnetic field and opposes changes in current?',
           'choices'      => json_encode([
               'Inductor',
               'Capacitor',
               'Resistor',
               'Battery',
           ]),
           'answer'       => 'Inductor',
           'explanation'  => 'Inductors resist changes in current by storing energy magnetically.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What happens to total capacitance when capacitors are connected in parallel?',
           'choices'      => json_encode([
               'Increases sum of individual values',
               'Decreases',
               'Remains the same',
               'Becomes reciprocals',
           ]),
           'answer'       => 'Increases sum of individual values',
           'explanation'  => 'Parallel capacitors add directly to give a larger total capacitance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What does AC stand for?',
           'choices'      => json_encode([
               'Alternating Current',
               'Analog Circuit',
               'Active Component',
               'Amplitude Control',
           ]),
           'answer'       => 'Alternating Current',
           'explanation'  => 'AC refers to current that periodically reverses direction.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the purpose of a pull-down resistor in digital circuits?',
           'choices'      => json_encode([
               'Ensure a defined logic LOW when input is floating',
               'Drive outputs HIGH',
               'Filter noise',
               'Increase clock speed',
           ]),
           'answer'       => 'Ensure a defined logic LOW when input is floating',
           'explanation'  => 'Pull-down resistors prevent inputs from floating by defaulting to LOW.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'Which logic gate outputs HIGH only when all inputs are HIGH?',
           'choices'      => json_encode([
               'AND gate',
               'OR gate',
               'NOT gate',
               'XOR gate',
           ]),
           'answer'       => 'AND gate',
           'explanation'  => 'AND gates require all inputs to be 1 (HIGH) to output HIGH.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Basic Electronics – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 8,
           'question'     => 'What is the binary representation of decimal number 10?',
           'choices'      => json_encode([
               '1010',
               '1001',
               '1110',
               '0101',
           ]),
           'answer'       => '1010',
           'explanation'  => '10 in base-2 is 1×2³ + 0×2² + 1×2¹ + 0×2⁰ = 8 + 0 + 2 + 0 = 10.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
