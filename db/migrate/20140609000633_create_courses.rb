class CreateCourses < ActiveRecord::Migration
  def change
    create_table :courses do |t|
      t.integer :year
      t.string :semester
      t.boolean :active, default: true

      t.timestamps
    end
  end
end
