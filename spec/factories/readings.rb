# Read about factories at https://github.com/thoughtbot/factory_girl

FactoryGirl.define do
  factory :reading do
    title "MyString"
    author "MyString"
    year 1
    link "MyString"
    active false
  end
end
