class CreateLectureReadings < ActiveRecord::Migration
  def change
    create_table :lecture_readings do |t|
      t.integer :lecture_id
      t.integer :reading_id
    end
  end
end
