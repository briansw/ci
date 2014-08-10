class CreateCourseReadings < ActiveRecord::Migration
  def change
    create_table :course_readings do |t|
      t.integer :course_id
      t.integer :reading_id

      t.timestamps
    end
  end
end
