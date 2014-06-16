class CreateLectures < ActiveRecord::Migration
  def change
    create_table :lectures do |t|
      t.string :title
      t.string :section
      t.integer :course_id
      t.string :slug
      t.datetime :publish_on, default: Time.now
      t.boolean :active, default: true

      t.timestamps
    end
  end
end
