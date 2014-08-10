class CreateStudents < ActiveRecord::Migration
  def change
    create_table :students do |t|
      t.string :first_name
      t.string :last_name
      t.string :username
      t.string :email
      t.string :url
      t.integer :course_id

      t.timestamps
    end
  end
end
