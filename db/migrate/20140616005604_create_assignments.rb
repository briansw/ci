class CreateAssignments < ActiveRecord::Migration
  def change
    create_table :assignments do |t|
      t.integer :course_id
      t.string :name
      t.datetime :publish_on
      t.string :section
      t.string :slug
      t.boolean :active, default: true

      t.timestamps
    end
  end
end
