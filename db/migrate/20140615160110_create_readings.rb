class CreateReadings < ActiveRecord::Migration
  def change
    create_table :readings do |t|
      t.string :title
      t.string :author
      t.integer :year
      t.string :link
      t.string :section
      t.boolean :active, default: true

      t.timestamps
    end
  end
end
